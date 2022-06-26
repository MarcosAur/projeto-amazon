<?php
include 'conexao.php';

if(!isset($_COOKIE['user_name'])) {
    echo '<script>alert("Sessão não iniciada. Você deve realizar login para finalizar a compra")</script>';
    $url = '../views/tela_login.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;   
}else{
    $nome = $_COOKIE['user_name'];
    echo "<script>alert('Compra Efetuada. A mesma será enviada para o endereço vinculado à sua conta {$nome}')</script>";
    excluirTudoDoCarrinho();
    $url = '../index.html';  
    echo("<script>history.replaceState({},'','$url');</script>");
    include $url;
}
?>
