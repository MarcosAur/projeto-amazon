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

?>

