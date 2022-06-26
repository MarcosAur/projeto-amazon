<?php
include_once 'conexao.php';


$pedidos = salvarCompra();
$id_pedido = $pedidos['id'];

limparCarrinho();

$str_msg = "Compra finalizada Numero do Pedido: $id_pedido.";
echo "<script>alert('$str_msg')</script>
<meta http-equiv='refresh' content='0; url=index.php' />";

?>