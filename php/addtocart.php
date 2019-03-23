<?php
require './connection.php';
session_start();
$uid=$_SESSION['uid'];//cid
$noofitem=$_GET['noofitem'];//qty
$fid=$_GET['fid'];//fid
// echo $fid."\n".$noofitem;
$sql = "SELECT * FROM food where fid like '$fid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);
$rid = $row[1];
$stmt = $conn->prepare("INSERT INTO cart(cid,rid,fid,qty) VALUES(?,?,?,?)");
$stmt->bind_param("iiis",$uid,$rid,$fid,$noofitem);
$stmt->execute();
$stmt->close();
echo "200";
?>