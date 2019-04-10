<?php
require 'connection.php';
$ctg = $_POST['ctg'];
$sql = "select * from food where category like '$ctg'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $i=0;
    $array = null;
    while($row = mysqli_fetch_assoc($result)){
        $array[$i] = $row;
        $i++;
    }
    echo json_encode($array);
}else{
    echo "no item";
}
?>