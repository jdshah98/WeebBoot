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
$fid=$_SESSION["fid"];
$name = $_POST["name"];
$category=$_POST["category"];
$description=$_POST["description"];
$price=$_POST["price"];
$url = upload($rid,$name);
//$url=$_FILES['url']['name'];


$sql = "select * from food where fid like '$fid'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_row($result);
    $id = $row[1];
$imageFileType = strtolower(pathinfo($_FILES["url"]["name"],PATHINFO_EXTENSION));
	$url = "/r".$row[0]."/". $name.".".$imageFileType;
	$stmt = $conn->prepare("UPDATE food SET name=?,ingredients=?,category=?,cost=?,url=? WHERE fid=?");
    $stmt->bind_param("sssisi",$name,$description,$category,$price,$url,$id);
    $stmt->execute();
	
	echo "Item Added";
}
else {
	 echo "Item Does not Exists";
}


?>
