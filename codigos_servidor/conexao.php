<?php

const usuario_banco = 'root';
const senha_banco = '';
const database = 'clientes-teste';
const host = 'localhost';
const mysqli = new mysqli(host, usuario_banco, senha_banco, database);


function adicionarUsuario($nome, $senha_user, $email){
    $sql_code = "INSERT INTO `cliente`(`login`, `senha`, `email`) VALUES ('$nome', '$senha_user', '$email')";
    $sql_query = mysqli->query($sql_code);
}

function verificarExistenciaUsuario($login, $email_user){
    $sql_code = "SELECT * FROM `cliente` WHERE email = '$email_user' OR login = '$login'";
    $sql_query = mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;
    return $quantidade;
}

function validarLogin($login, $senha){
    $sql_code = "SELECT * FROM `cliente` WHERE senha = '$senha' AND login = '$login'";
    $sql_query = mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;
    return $quantidade;
}

function updateQuantidadeProduto($nome, $qtd){
    $sql_code = "UPDATE `carrinho` SET `quantidade`=quantidade + '$qtd' WHERE nome='$nome'";
    $sql_query = mysqli->query($sql_code);
}

function validarExistenciaDoProduto($nome){
    $sql_code = "SELECT * FROM `carrinho` WHERE nome='$nome'";
    $sql_query = mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;
    return $quantidade;
}

function resgatarProdutos(){
    $sql_code = "SELECT * FROM `carrinho`";
    $sql_query = mysqli->query($sql_code);
    $rows = mysqli_fetch_all($sql_query,MYSQLI_NUM);


    return $rows;
}

function adicionarAoCarrinho($nome, $valor, $qtd){
    $sql_code = "INSERT INTO `carrinho`(`nome`, `valor`, `quantidade`) VALUES ('$nome', '$valor', '$qtd')";
    $sql_query = mysqli->query($sql_code);
}

function excluirDoCarrinho($nome){
    $sql_code = "DELETE FROM `carrinho` WHERE nome='$nome'";
    $sql_query = mysqli->query($sql_code);
}

function excluirTudoDoCarrinho(){
    $sql_code = "DELETE FROM `carrinho`";
    $sql_query = mysqli->query($sql_code);
}

?>