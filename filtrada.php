<?php

include 'topo.php';
include_once 'conexao.php';
include_once 'utilitarios.php';

$filtro = $_GET['filtro'];
$produtos_filtro = buscarProdutosPorFiltro($filtro);
$html_code = exibirProdutos($produtos_filtro);

echo $html_code;


include 'footer.php';
?>