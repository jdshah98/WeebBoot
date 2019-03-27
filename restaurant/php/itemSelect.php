<?php
require './connection.php';
session_start();
if(isset($_SESSION['fid']))
{
    $fid=$_SESSION['fid'];
    $sql = "SELECT * FROM food WHERE fid =".$fid;
    $result= mysqli_query($conn,$sql);
    if($row = mysqli_fetch_row($result))
    {
        echo json_encode($row);
    }
}
?>