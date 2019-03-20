<?php
require './connection.php';
$sql = "select * from food";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)<=0){
    echo "items not available";
}else{
    $rows = null;
    $i=0;
    while($r = mysqli_fetch_assoc($result)) {
        $rows[$i] = $r;
        $i++;
    }
    print_r(json_encode($rows));
}
$conn->close();
?>