<?php
require './connection.php';
$fid = $_GET['fid'];
$fid = (int)$fid;
$sql = "SELECT * FROM food WHERE fid =" . $fid;
$result = mysqli_query($conn, $sql);
if ($result) {
        $row = mysqli_fetch_assoc($result);
        print_r(json_encode($row));
    }
?>