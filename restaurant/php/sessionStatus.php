<?php

session_start();
if (isset($_SESSION['sid'])) {
        echo "200";
        echo "Email : ".$_SESSION['uEmail']." Uid :- ".$_SESSION['uid'];
        
    }else
    {
        echo "404";
    }
?>