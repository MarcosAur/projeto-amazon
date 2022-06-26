<?php


if (isset($_COOKIE['user_name'])) {
    include 'topo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Finalizar Compra</h2>
      <p class="lead">Favor conferir seus dados e finalizar a compra ao final do formulário</p>
    </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Informações Pessoais</h4>
        <form class="needs-validation" action='finalizarCompra.php' method='post'>
          <div class="row g-3">
            <div class="col-sm-6">
                <h5 for="firstName" class="form-label">Nome de Usuário</h5>
                <?php
                $nome = $_COOKIE['user_name'];
                echo "\n<label>$nome</label>";
                ?>
            </div>
            <div class="col-12">
            <h5 for="firstName" class="form-label">Email</h5>
                <?php
                $email = $_COOKIE['email'];
                echo "\n<label>$email</label>";
                ?>
              </div>
            </div>

            <div class="col-12">
            <br>
            
            <h5 for="firstName" class="form-label">Endereço para entrega</h5>
            </div>
            <input required style='width:1080px;' type="text" name=endereco> 
        </div>
        <br>
            <center><button type='submit' class='btn btn-primary'>Finalizar a compra</button></center>
            </form>
            

</body>
</html>
<?php
    
}else {
    echo "<script>alert('Usuario não logado. Faça login para efetuar a compra')</script>
    <meta http-equiv='refresh' content='0; url=index.php' />";

}
?>
