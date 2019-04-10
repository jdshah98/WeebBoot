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
if(isset($_POST['data']) && isset($_FILES['url'])){
    $data = json_decode($_POST['data'], true);
    $name = $data[0];
    $category=$data[1];
    $description=$data[2];
    $price=$data[3];
    $url=$_FILES['url']['name'];

	$sql = "select * from food where fid like '$fid'";
	$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_row($result);
    $id = $row[1];
	$rid=$row[0];
	$url = upload($rid,$name);
	if(strpos($url,'restaurant')!==false)
{
	
	$stmt = $conn->prepare("UPDATE food SET name=?,ingredients=?,category=?,cost=?,url=? WHERE fid=?");
    $stmt->bind_param("sssisi",$name,$description,$category,$price,$url,$id);
    $stmt->execute();
	
	echo "200";
	}
	else {
	echo $url;
}

}
else {
	 echo "Item Does not Exists";
}
}
else {
	$data = json_decode($_POST['data'], true);
    $name = $data[0];
    $category=$data[1];
    $description=$data[2];
    $price=$data[3];
    

	$sql = "select * from food where fid like '$fid'";
	$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_row($result);
    $id = $row[1];
	
	$stmt = $conn->prepare("UPDATE food SET name=?,ingredients=?,category=?,cost=? WHERE fid=?");
    $stmt->bind_param("sssii",$name,$description,$category,$price,$id);
    $stmt->execute();
	
	echo "200";
}
else {
	 echo "Item Does not Exists";
}
}



//$url=$_FILES['url']['name'];




?>
