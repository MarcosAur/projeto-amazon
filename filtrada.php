<?php

include './auxiliares/topo.php';
include './auxiliares/conexao.php';
include './auxiliares/utilitarios.php';

$filtro = $_GET['filtro'];
$produtos_filtro = buscarProdutosPorFiltro($filtro);
$html_code = exibirProdutos($produtos_filtro);

echo $html_code;


include './auxiliares/footer.php';
?>