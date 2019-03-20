<?php
require 'connection.php';
// Turn off all error reporting
session_start();
error_reporting(0);
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
$type = $_GET['type'];
$name = $_GET['name'];
$mobile = $_GET['mobile'];
$email = $_GET['email'];
$pass = $_GET['password'];

$sql = "select * from user where uEmail like '$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "User already Exist";
}else{
    $stmt = $conn->prepare("INSERT INTO user(uType,uEmail,uPassword) VALUES (?,?,?)");
    $stmt->bind_param("sss",$type,$email,$pass);
    $stmt->execute();
    $sql = "select * from user where uEmail like '$email'";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    $id = $row[0];

    $_SESSION['uid']=$id;
    $_SESSION['uEmail']=$row[2];
    $_SESSION['uType']=$row[1];

    $ip=get_client_ip();

    $stmt2 = $conn->prepare("INSERT INTO session values(?,?,?,?,?,?)");
    $stmt2->bind_param("sissss",$_SESSION['sid'],$_SESSION['uid'],$_SESSION['uEmail'],$_SESSION['uType'],time(),$ip);
    $stmt2->execute();

    if($type=="customer"){
        $stmt = $conn->prepare("INSERT INTO customer(uId,cName,cMobile) values(?,?,?)");
        $stmt->bind_param("iss",$id,$name,$mobile);
        $stmt->execute();
        echo "User Logged In";
    }else if($type=="restaurant"){
        $stmt = $conn->prepare("INSERT INTO restaurant(uId,rName,rMobile) values(?,?,?)");
        $stmt->bind_param("iss",$id,$name,$mobile);
        echo "User Logged In";
    }
    $stmt2->close();
    $stmt->close();
}
$conn->close();
?>