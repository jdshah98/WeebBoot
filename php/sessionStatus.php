<?php
session_start();
if (isset($_SESSION['sid'])) {
        echo "200";
    }else
    {
        echo "404";
    }
?>