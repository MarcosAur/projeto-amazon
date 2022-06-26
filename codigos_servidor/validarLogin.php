<?php
include_once ('conexao.php');

$quantidade = validarLogin($_POST['login'],$_POST['senha']);

if ($quantidade > 0) {
    $cookie_name = 'user_name';
    $cookie_value = $_POST['login'];
    setcookie($cookie_name, $cookie_value, time() + 86400, "/"); 
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;


}else {
    echo "<script>alert('Login mal sucedido, favor tente novamente');</script>";
    $url = '../views/tela_cadastro.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}

?>