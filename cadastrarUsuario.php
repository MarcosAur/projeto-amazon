<?php
    include_once 'conexao.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $existeUsuario = verificarExistenciaUsuario($login, $email);

    if ($existeUsuario == 0) {
        $usuarioCriado = cadastrarNovoUsuario($login, $senha, $email);

        if (!$usuarioCriado) {
            echo "<script>alert('Erro ao cadastrar usuário')</script>";
            include 'tela_cadastro.php';
        }else {
            echo "<script>alert('Usuário cadastrado com sucesso')</script>";
            $username = $usuario['login'];
            $email = $usuario['email'];
            setcookie('user_name', "$username", time() + 86400, "/");
            setcookie('email', "$email", time() + 86400, "/");
            include 'index.php';
        }
    }else{
        echo "<script>alert('Usuário já foi cadastrado no banco')</script>";
        include 'tela_cadastro.php';
    }

?>