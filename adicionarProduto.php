<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$qtd = $_POST['qtd'];

$existe = verificarExistenciaNoCarrinho($nome);

if($existe == 0){
    $adicionado = adicionarAoCarrinho($nome, $qtd);

    if ($adicionado){
        echo "<script>alert('Produto adicionado com sucesso')</script>";

    }else{
        echo "<script>alert('Erro ao adicionar o produto')</script>";
        $redirect = 'index.php';
        header("location:$redirect");
    }
}else{
    $alterado = adicionarAItemExistente($nome, $qtd);
    if ($alterado){
        echo "<script>alert('Item alterado com sucesso')</script>";
    }else{
        echo "<script>alert('Falha ao adicionar ao carrinho')</script>";
    }
}
echo "<meta http-equiv='refresh' content='0; url=index.php' />";

?>