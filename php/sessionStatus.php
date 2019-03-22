<?php

session_start();
if (issset($_SESSION['sid'])) {
        echo "200";
    }else
    {
        echo "404";
    }
?>