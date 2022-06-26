<?php

if (isset($_COOKIE['user_name'])) {
    setcookie('user_name','', time() - 100, "/");
    setcookie('email','', time() - 100, "/");
    include 'index.php';
}

?>