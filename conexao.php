<?php

function buscarProdutos(){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `produto`";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_all($resultado);
    return $rows;
}

function buscarProdutosPorFiltro($filtro){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `produto` WHERE nome like '%$filtro%'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_all($resultado);
    return $rows;
}

function buscarUsuario($login, $senha){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `cliente` WHERE login = '$login' AND senha = '$senha'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_assoc($resultado);
    return $rows;
}

function cadastrarNovoUsuario($login, $senha, $email){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "INSERT INTO `cliente`(`login`, `senha`, `email`) VALUES ('$login','$senha','$email')";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $str_query);
    return $resultado;
}

function verificarExistenciaUsuario($login, $email){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `cliente` WHERE login = '$login' OR email = '$email'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $num_rows = mysqli_num_rows($resultado);
    return $num_rows;
}

?>

