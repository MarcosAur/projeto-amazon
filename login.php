<!doctype html>
<html lang="pt-BR">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dev Web</title>
    <link rel="stylesheet" href="./css/signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>

  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form method="POST" action="validarLogin.php">
        <img class="mb-4" src="../img/amazon-icon-c.png" alt="Logo" width="120" height="80">
        <h1 style="color: white;" class="h3 mb-3 fw-normal">Insira as credenciais de login</h1>

        <div class="container">
          <div class="row">
            <div class="col-3">
              <label style="color: white;" class="h5 mb fw-normal" for="login">Login</label>
            </div>
          </div>

        <div style="margin:3px;" class="form-floating">
          <input style="height: 50px;" type="text" class="form-control" name="login" id="login">
        </div>

        <div class="row">
          <div class="col-3">
            <label style="color: white;" class="h5 mb fw-normal" for="senha">Senha</label>
          </div>
        </div>
      
        <div style="margin:3px;" class="form-floating">
          <input style="height: 50px;" type="password" class="form-control" name="senha" id="senha">
        </div>

        <div style="padding-bottom: 15px; " class="row">
          <div class="col">
            <button style="font-size: 15px;"  class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </div>
        </div>
        <a style="color: white;" href="./tela_cadastro.html">Cadastre-se</a>
      </form>
    </main>
  </body>
</html>