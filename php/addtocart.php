<?php
require './connection.php';
session_start();
$uid=$_SESSION['uid'];
echo $uid;
?>