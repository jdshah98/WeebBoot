<?php
if(isset($_COOKIE['user']))
{
    unset($_COOKIE['user']);
    setcookie('user', null, -1, '/');
    session_abort();
    echo 200;
    
}else {
    echo 404;
}
?>