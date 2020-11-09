<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MEDCEU - Diagnóstico por Imagem</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/dashboard.css" rel="stylesheet">

  
</head>

<body>
  <?php require_once 'check_login.php'; ?>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md fixed-top dashboard-navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Página Principal<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Administração</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Begin page content -->
  <main role="main" class="container">

    <div class="row">
      <div class="mt-5 col-sm-12">
        <div class="card card-body bg-light">
          <h1 class="mt-3">Administração Medceu</h1>
          <p class="lead">Escolha a opção que você deseja configurar.</p>
          <select class="custom-select mb-3 mt-3 empty" onchange="location = this.value;">
        <option selected disabled> Selecione sua opção</option>
        <option value="adm-convenios.php">Gerenciar Convênios</option>
      </select>
        </div>
      </div>
    </div>
    
  </main>

  <footer class="footer">
    <div class="container">
      &copy; <strong><span>Medceu</span></strong> - todos os direitos reservados
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>


</html>