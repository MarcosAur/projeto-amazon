<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$qtd = $_POST['qtd'];

$existe = verificarExistenciaNoCarrinho($nome);

if($existe == 0){
    $adicionado = adicionarAoCarrinho($nome, $qtd);

    if ($adicionado){
        echo "<script>alert('Produto adicionado com sucesso')</script>";
        include 'index.php';
    }else{
        echo "<script>alert('Erro ao adicionar o produto')</script>";
        include 'index.php';
    }
}else{
    $alterado = adicionarAItemExistente($nome, $qtd);
    if ($alterado){
        echo "<script>alert('Item alterado com sucesso')</script>";
        include 'index.php';
    }else{
        echo "<script>alert('Falha ao adicionar ao carrinho')</script>";
        include 'index.php';
    }
}


?>