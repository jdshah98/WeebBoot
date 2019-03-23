<?php

require './connection.php';
$cartid=$_GET['cartid'];
$sql="DELETE FROM cart WHERE id= ".$cartid;
if ($conn->query($sql) === TRUE) {
    echo "Remove successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
echo $cartid;
?>