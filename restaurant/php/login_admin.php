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
$email = $_GET["loginemail"];
$pass = $_GET["loginpw"];
//$haspass = password_hash($pass,PASSWORD_DEFAULT);
$sql2 = "select * from user where uEmail like '$email'";
$result = mysqli_query($conn, $sql2);
if(mysqli_num_rows($result) > 0)
{
	$row = mysqli_fetch_row($result);
	if(password_verify($pass,$row[3])){
		$id = $row[0];
		// echo $id;
		//  $_SESSION['uid']=$id;
		$_SESSION['uEmail']=$row[2];
		$_SESSION['uType']=$row[1];
		$stmt = "SELECT * FROM restaurant WHERE `uid` = '$id'";
		$result = mysqli_query($conn, $stmt);
		$row = mysqli_fetch_row($result);
		$id = $row[0];
		
		$_SESSION['uid']=$id;
		$ip=get_client_ip();
		$stmt2 = $conn->prepare("INSERT INTO session values(?,?,?,?,?,?)");
		$stmt2->bind_param("sissss",$_SESSION['sid'],$_SESSION['uid'],$_SESSION['uEmail'],$_SESSION['uType'],time(),$ip);
		$stmt2->execute();
		setcookie("FoodDelivery[$id]",$row[2]."__".$row[3],time()+3600*24*60);
		//setcookie("userid",$id,time()+3600*24*60, "/");
    	echo "200";
		
		
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