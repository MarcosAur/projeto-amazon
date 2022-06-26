<?php
include_once ("conexao.php");

$quantidade = verificarExistenciaUsuario($_POST['login'],$_POST['email']);


if (!isset($_COOKIE['user_name'])) {
    if ($quantidade > 0){
        echo("<script>alert('Usuário já existe. Favor tentar novamente');</script>");

    }else {
        adicionarUsuario($_POST['login'],$_POST['senha'],$_POST['email']);
        $cookie_name = 'user_name';
        $cookie_value = $_POST['login'];
        setcookie($cookie_name, $cookie_value, time() + 86400, "/"); 
        echo("<script>alert('Usuário cadastrado com sucesso');</script>");
        $url = '../index.html';  
        echo("<script>history.replaceState({},'','$url');</script>");
        include $url;
    }
}else {
    echo("<script>alert('Já existe um usuário cadastrado na sessão ');</script>");
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}




?>