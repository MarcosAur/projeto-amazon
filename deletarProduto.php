<?php
    include_once 'conexao.php';

    $id_produto = $_POST['id'];
    $produtoDeletado = deletarProduto($id_produto);

    if ($produtoDeletado) {
        echo "<script>alert('Produto deletado do carrinho')</script>
        <meta http-equiv='refresh' content='0; url=carrinho.php' />";
    }
?>