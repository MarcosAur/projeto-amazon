<?php

include_once 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];



if (!isset($_COOKIE['user_name'])) {
    $usuario = buscarUsuario($login, $senha);
    if (count($usuario) != 0) {
        $username = $usuario[0][1];
        $email = $usuario[0][3];
        setcookie('user_name', "$username", time() + 86400, "/");
        setcookie('email', "$email", time() + 86400, "/");
        include_once 'index.php';
    }else {
        echo "<script>alert('Usuário não encontrado')</script>";
        include_once 'login.php';
    }
}else {
    echo "<script>alert('Usuário já logado. Caso queira alterar desconecte e realize um novo login')</script>";
        include_once 'index.php';
}
/*

*/

?>