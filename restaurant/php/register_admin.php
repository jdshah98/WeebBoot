<?php
require 'connection.php';
// Turn off all error reporting
session_start();
error_reporting(0);
/*if(!isset($_SESSION['sid'])){
       $_SESSION['sid']=session_id();
}*/
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
$name = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$pass = $_GET['pw'];
$haspass = password_hash($pass,PASSWORD_DEFAULT);

$sql = "select * from user where uEmail like '$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "User already Exist";
}else{
	$type="restaurant";
    $stmt = $conn->prepare("INSERT INTO user(uType,uEmail,uPassword) VALUES (?,?,?)");
    $stmt->bind_param("sss",$type,$email,$haspass);
    $stmt->execute();

    $sql = "select * from user where uEmail like '$email'";
    echo "Hello world";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    $id = $row[0];
	echo "$id";
    /*$_SESSION['uid']=$id;
    $_SESSION['uEmail']=$row[2];
    $_SESSION['uType']=$type;
    $ip=get_client_ip();
    setcookie("FoodDelivery[$id]",$row[2]."__".$row[3],time()+3600*24*60);
    $stmt2 = $conn->prepare("INSERT INTO session values(?,?,?,?,?,?)");
    $stmt2->bind_param("sissss",$_SESSION['sid'],$_SESSION['uid'],$_SESSION['uEmail'],$_SESSION['uType'],time(),$ip);
    $stmt2->execute();*/
    $stmt = $conn->prepare("INSERT INTO restaurant (uId,rName,rMobile) VALUES (?,?,?)");
    $stmt->bind_param("iss",$id,$name,$mobile);
	$stmt->execute();
	echo "200";
    $stmt2->close();
    $stmt->close();
}
$conn->close();
?>