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
if(isset($_POST['data']) && isset($_FILES['url'])){
    $data = json_decode($_POST['data'], true);
    $name = $data[0];
    $category=$data[1];
    $description=$data[2];
    $price=$data[3];
    $url=$_FILES['url']['name'];
    // echo 123;
    // echo $data[0]." :- data 0";
}
$sql = "select * from food where name like '$name'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "Item already Exists";
}
else {
	$rid=$_SESSION['rid'];
	//$rid=	(int)$_COOKIE[$cookie_name];

    $path = upload($rid,$name);
    //echo "img path :- ".$path;

    if(strpos($path,'restaurant')!==false)
	{
        $stmt = $conn->prepare("INSERT INTO food(rid,name,category,ingredients,cost,url) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("isssis",$rid,$name,$category,$description,$price,$path);
        $stmt->execute(); 
		echo "200";
    }	
	else 
	{
	echo $path;
	}
}
	//echo $rid;
    

?>