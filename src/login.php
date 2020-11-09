<?php
    session_start();
    if(isset($_SESSION['userid'])) {
      header("location: dashboard.php");    
    }
  ?>

<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/img/favicon.png" rel="icon">

  <title>Login de Administrador</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center"> 

  <?php
  require_once "mensagens.php";
  ?>

  <div class="container">
    <?php
    require_once "mensagens.php";
    ?>

    <div class="row">
      <form class="form-signin" action="login.controller.php" method="post">
        <h1 class="mb-4 display-2" style="color:#4b5052">Medceu</h1>
        <h1 class="h3 mb-3 text-muted">Login de Administrador</h1>
        <label for="inputEmail" class="sr-only">Email*</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email*" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha*</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha*" name="senha" required>
        <button class="btn btn-lg btn-block botao-login" type="submit" name="login">Entrar</button>
      </form>
    </div>

  </div>

</body>

</html>