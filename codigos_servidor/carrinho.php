<!DOCTYPE html>
<html lang="pt-Br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar" style="background-color:#232F3E"> 
        <div class="container">
          <a class="navbar-brand text-white" href="../index.html">
            <img src="../img/amazon-icon-c.png" alt="" width="60" height="50" class="d-inline-block align-text-top"> 
            <h2 class="d-inline-block align-text-top">Amazon</h2>
          </a>
        </div>
    </nav>

</body>


<?php
if (isset(($_COOKIE['user_name']))){
    $usuario = $_COOKIE['user_name'];
    echo "<label>$usuario</label>";
}

/*
Criação da head da tabela.
*/



include_once './conexao.php';
echo "<center><h1 class='container-fluid'>Carrinho de Compras</h1></center>";

$thead_array = ["ID","Produto","Valor","Quantidade","Subtotal"];
$codigo_thead = "<table class='table'><thead><tr>";

foreach ($thead_array as $linha) {
    $codigo_thead = $codigo_thead . "<th>$linha</th>";
}

$codigo_thead = $codigo_thead . "<th></th></tr></thead>";


/*
Criação das linhas da tabela com produtos do carrinho.
*/

$codigo_tbody = "<tbody>";
$produtos = resgatarProdutos();

$codigo_trow = "";

$valor_total_compra = 0;



foreach ($produtos as $produto) {
    $value_post = $produto[1];
    $contador = 0;
    $codigo_trow = $codigo_trow . "<form action='./excluirDoCarrinho.php' method='post'>
    <tr>";
    foreach ($produto as $atributo) {
        $contador += 1;
        $cifrao = "";
        if ($contador == 3) {
           $cifrao = "R$ ";
        }
        $codigo_trow = $codigo_trow . "<td >$cifrao  $atributo</td>";
    }
    $subtotal = $produto[2] * $produto[3];
    $valor_total_compra += $subtotal;
    $codigo_trow = $codigo_trow . "<td>R$ $subtotal</td>";
    $codigo_trow = $codigo_trow . "<td><input type='text' value='$value_post' name='row' hidden><button class='w-10 btn btn-primary' type='submit'>Exluir</button></td></tr></form>";
}

$codigo_tbody = $codigo_tbody . $codigo_trow . "</tbody>";

$codigo_tfooter = "<tfooter><tr><td colspan = '6' align='center' >Valor Total: R$ $valor_total_compra</td></tr></tfooter></table>";


echo $codigo_thead . $codigo_tbody . $codigo_tfooter;


if (count($produtos) == 0) {
    echo "<div>
    <script>function carrinhoVazio(){
        alert('Carinho vazio. Adicione itens para comprar.');
    }
        </script>
            <center>
            <a href='../index.html'><button onclick='carrinhoVazio()' class='btn btn-primary'>Finalizar Compra</button></a>
            </center>
        </div>";
}else{
    echo "<div>
            <center>
            <a href='./efetuarCompra.php'><button class='btn btn-primary'>Finalizar Compra</button></a>
            </center>
        </div>";
}

?>


</html>