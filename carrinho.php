<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Dev Web</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <table>

        </table>
    </body>
    </html>



<?php
    include 'topo.php';
    include_once 'conexao.php';
    echo "    <table class='table'>
    <thead>
        <tr>
            <th >Id</th>
            <th>Produto</th>
            <th>Valor Unitario</th>
            <th>Quantidade</th>
            <th>Subtotal</th>
            <th>Retirar</th>
        </tr>
    </thead>";

    $produtosNoCarrinho = coletarProdutosCarrinho();
    $valorTotal = 0.0;
    foreach ($produtosNoCarrinho as $produto) {
        $id_produto = $produto[0];
        $nome_produto = $produto[1];
        $valor_produto = $produto[2];
        $quant = $produto[3];
        $subtotal = $produto[4];
        $valorTotal += $subtotal;
        echo "<tbody>
        <tr>
            <td>$id_produto</td>
            <td>$nome_produto</td>
            <td>R$ $valor_produto</td>
            <td>$quant</td>
            <td>R$ $subtotal</td>
            <form action='deletarProduto.php' method='POST'>'<td><input name='id' value='$id_produto' hidden><button class='btn'>Excluir</button></input></td></form>
        </tr>
    </tbody>";
    }

        echo "<tfoot>
        <tr>
            <td colspan = 6> Valor Total: R$ $valorTotal</td>
        </tr>
    </tfoot></table>";

    if (count($produtosNoCarrinho) != 0){
        echo "    <center>
        <a href='checkout.php'><button class='btn btn-primary'>Finalizar a compra</button></a>
        </center>";
    }

?>