<?php

function buscarProdutos(){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `produto`";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_all($resultado);
    return $rows;
}

function buscarProdutosPorFiltro($filtro){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `produto` WHERE nome like '%$filtro%'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_all($resultado);
    return $rows;
}



function adicionarAoCarrinho($nome, $quant){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';

    //Query para resgatar o id do produto selecionado
    $str_query = "SELECT id, valor FROM `produto` WHERE nome = '$nome'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_assoc($resultado);

    //Definição da parâmetros para query de inserção
    $id_produto = $rows['id'];
    $valor_unitario = $rows['valor'];
    $subtotal = $valor_unitario * $quant;

    //execução da query de inserção
    $str_query = "INSERT INTO `carrinho`(`id_produto`, `subtotal`, `quantidade`) VALUES ('$id_produto','$subtotal','$quant');";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $str_query);
    return $resultado;

}

function adicionarAItemExistente($nome, $qtd){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';

    $sql_query = "UPDATE carrinho, produto SET `quantidade`= quantidade + '$qtd' WHERE produto.id = carrinho.id_produto AND produto.nome = '$nome';";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $sql_query);
    return $resultado;
}

function deletarProduto($id_produto){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';

    $sql_query = "DELETE FROM `carrinho` WHERE id_produto = '$id_produto';";

    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $sql_query);
    return $resultado;
}

function verificarExistenciaNoCarrinho($nome){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';

    $sql_query = "SELECT * 
    FROM carrinho as carr, produto as prod
    WHERE carr.id_produto = prod.id AND prod.nome = '$nome';";

    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $sql_query);
    $num_rows = mysqli_num_rows($resultado);
    return $num_rows;
}

function salvarCompra(){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';

    $id_cliente = $_COOKIE['user_id'];
    date_default_timezone_set("America/Fortaleza");
    $data = date('Y-m-d G:i:s',time() );
    $descricao = "";
    $produtos = coletarProdutosCarrinho();
    foreach ($produtos as $produto) {
        $descricao .= "$produto[1]\n";
    }

    $sql_query = "INSERT INTO `compra`(`id_cliente`, `data`, `produtos`) VALUES ('$id_cliente','$data','$descricao')";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    mysqli_real_query($conn, $sql_query);

    $sql_query = "SELECT id FROM compra WHERE id_cliente = '$id_cliente' AND data = '$data' AND produtos = '$descricao'";
    $resultado = mysqli_query($conn, $sql_query);
    $rows = mysqli_fetch_assoc($resultado);
    return $rows;
}

function coletarProdutosCarrinho(){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    
    $sql_query = "SELECT prod.id, prod.nome, prod.valor, carr.quantidade, carr.subtotal
    FROM carrinho as carr, produto as prod
    WHERE prod.id = carr.id_produto";

    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn,$sql_query);
    $rows = mysqli_fetch_all($resultado);
    return $rows;
}

function buscarUsuario($login, $senha){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `cliente` WHERE login = '$login' AND senha = '$senha'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $rows = mysqli_fetch_assoc($resultado);
    return $rows;
}

function limparCarrinho(){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "DELETE FROM carrinho";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $str_query);
}

function cadastrarNovoUsuario($login, $senha, $email){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "INSERT INTO `cliente`(`login`, `senha`, `email`) VALUES ('$login','$senha','$email')";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_real_query($conn, $str_query);
    return $resultado;
}

function verificarExistenciaUsuario($login, $email){
    $host_name = 'localhost';
    $user_name = 'root';
    $passwd = '';
    $db_name = 'Clientes-teste';
    $str_query = "SELECT * FROM `cliente` WHERE login = '$login' OR email = '$email'";
    $conn = mysqli_connect($host_name,$user_name,$passwd,$db_name);
    $resultado = mysqli_query($conn, $str_query);
    $num_rows = mysqli_num_rows($resultado);
    return $num_rows;
}

?>

