<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['sid'])){
       $_SESSION['sid']=session_id();
}
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$email = $_GET["email"];
$pass = $_GET["pass"];
$sql2 = "select * from user where uEmail like '$email'";
$result = mysqli_query($conn, $sql2);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_row($result);
	if(password_verify($pass,$row[3])){
		$id = $row[0];
		$_SESSION['uid']=$id;
		$_SESSION['uEmail']=$row[2];
		$_SESSION['uType']=$row[1];
		$ip=get_client_ip();
		$stmt2 = $conn->prepare("INSERT INTO session values(?,?,?,?,?,?)");
		$stmt2->bind_param("sissss",$_SESSION['sid'],$_SESSION['uid'],$_SESSION['uEmail'],$_SESSION['uType'],time(),$ip);
		$stmt2->execute();
		setcookie("user",$row[1]."__".$row[2]."__".$row[3], time()+86400*60,"/");
    	echo "login success";
	}else{
		echo "username or password is invalid";
	}
}
else
{
	session_abort();
	echo "login failed";
}
?>