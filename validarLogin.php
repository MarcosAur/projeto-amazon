<?php

// Esse arquivo valida se já existe um usuário logado
// Caso nã haja ele valida se os dados existem no banco
// Caso exitam ele seta a variável global cookies e loga o usuário


include_once 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

if (!isset($_COOKIE['user_name'])) {
    $usuario = buscarUsuario($login, $senha);
    if (count($usuario) != 0) {
        $username = $usuario['login'];
        $email = $usuario['email'];
        setcookie('user_name', "$username", time() + 86400, "/");
        setcookie('email', "$email", time() + 86400, "/");
        $redirect = 'index.php';
        header("location:$redirect");
    }else {
        echo "<script>alert('Usuário não encontrado')</script>
        <meta http-equiv='refresh' content='0; url=tela_login.php' />";
    }
}else {
    echo "<script>alert('Usuário já logado. Caso queira alterar desconecte e realize um novo login')</script>
    <meta http-equiv='refresh' content='0; url=index.php' />";
}
?>