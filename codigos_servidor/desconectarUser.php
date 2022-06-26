<?php
if (isset($_COOKIE['user_name'])) {
        setcookie('user_name', "", time() - 3600, "/");
        $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}

?>