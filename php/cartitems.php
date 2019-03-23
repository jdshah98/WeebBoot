<?php
require 'connection.php';
session_start();
if (isset($_SESSION['sid'])) {
    $uid = $_SESSION['uid'];
    // echo $uid;
    $sql = "SELECT * FROM cart c, food f WHERE c.cid = ".$uid." AND c.fid = f.fid";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    $rows = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[$i] = $row;
        $i++;
    }
    print_r(json_encode($rows));
}

$conn->close();
