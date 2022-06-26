<?php
    include_once 'conexao.php';

    $id_produto = $_POST['id'];
    $produtoDeletado = deletarProduto($id_produto);

    if ($produtoDeletado) {
        echo "<script>alert('Produto deletado do carrinho')</script>";
        include 'carrinho.php';
    }
?>