<!DOCTYPE html>
<html lang="pt-BR">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dev Web</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
</head>
<body>
<nav class="navbar" style="background-color:#232F3E"> 
        <div class="container">
          <a class="navbar-brand text-white" href="/index.php">
            <img src="./img/amazon-icon-c.png" alt="" width="60" height="50" class="d-inline-block align-text-top"> 
            <h2 class="d-inline-block align-text-top">Amazon</h2>
          </a>
        </div>
    </nav>
    <div class="container pb-5 pt-5">     
        <section>
            <form action="./filtrada.php" method="get" class="d-flex" role="search">
                <input required name='filtro'class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </section>
    </div>
</body>
</html>