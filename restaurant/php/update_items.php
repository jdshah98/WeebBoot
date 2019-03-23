<?php
require 'connection.php';
include 'fileupload.php';
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
$name = $_POST["name"];
$category=$_POST["category"];
$description=$_POST["description"];
$price=$_POST["price"];
$url=$_FILES['url']['name'];


$sql = "select * from food where name like '$name'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_row($result);
    $id = $row[1];
	$stmt = $conn->prepare("UPDATE food SET name=?,ingredients=?,category=?,cost=?,url=? WHERE fid=?");
    $stmt->bind_param("sssisi",$name,$description,$category,$price,$url,$id);
    $stmt->execute();
	upload($row[0],$name);
	echo "Item Added";
}
else {
	 echo "Item Does not Exists";
}


?>