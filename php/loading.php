<?php
error_reporting(0);
session_start();
    if(is_array($_COOKIE['FoodDelivery'])){
        $count=0;
        foreach ($_COOKIE['FoodDelivery'] as $name => $value) {
            $count = $name;
            // echo $value."\n";
        }
        echo $count;
        $value = $_COOKIE["FoodDelivery"][$count];
        // echo $value;
        $value2 = explode("__",$value);
        print_r($value2);
    }

?>