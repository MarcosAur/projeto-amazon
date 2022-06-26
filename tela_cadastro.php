<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dev Web</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
  <body>

<div class="container">
  <main>
    <div>
      <img class="d-block mx-auto mb-4" src="../img/amazon-icon-c.png" alt="Logo" width="200" height="120">
      <center>
      <h2>Cadastro de Usuários</h2>
    </center>
    </div>

      <div >
        <h4>Informações Pessoais</h4>
        <form validate class="needs-validation" method="POST" action="cadastrarUsuario.php">
          <div>
            <div style="width: 99%;">
              <label for="nome" class="form-label">Login</label>
              <input type="text" class="form-control" name="login" id="login" placeholder="Login" value="" required>
            </div>

            <div style="width: 99%;">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" value="" required>
            </div>

            <div style="width: 99%;">
              <label for="email" class="form-label">Email</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
            </div>
            
            </div>
          <hr class="my-4">
          <center>
            <button class="w-50 btn btn-primary" type="submit">Cadastrar</button>
          </center>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>