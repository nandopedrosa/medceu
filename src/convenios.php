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
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
        <div class="container d-flex">
            <div class="contact-info ">
                <i class="icofont-envelope"></i> <a href="/cdn-cgi/l/email-protection#bad9d5d4cedbd9cefadfc2dbd7cad6df94d9d5d7"><span class="__cf_email__" data-cfemail="573438392336342317322f363a273b327934383a">sac@medceu.com.br</span></a>
                <i class="icofont-phone"></i> 61 3347-0909
                <i class="icofont-brand-whatsapp"></i> 61 9 8424 9504
                <i class="icofont-google-map"></i> <a target="_blank" href="https://goo.gl/maps/qv2WspGFfhZMiC6w8">SHLN Lote 9, Bloco B Salas 101 a 114 Ed. Biosphere Center</a>
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/clinicamedceu" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com/clinicamedceu/" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo "><a href="index.php"><img src="assets/img/logo-medceu.jpg" alt="Medceu"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php#about">A Clínica</a></li>
                    <li><a href="index.php#doctors">Equipe</a></li>
                    <li><a href="convenios.html">Convênios</a></li>
                    <li><a href="mastologia.html">Mastologia</a></li>
                    <li class="drop-down"><a href="">Exames</a>
                        <ul>
                            <li><a href="densitometria.html">Densitometria Óssea</a></li>
                            <li><a href="#">Ginecológicos</a></li>
                            <li><a href="#">Exame das Mamas</a></li>
                            <li><a href="#">Medicina Fetal</a></li>
                            <li><a href="#">Medicina Interna</a></li>
                            <li><a href="#">Obstétricos</a></li>
                            <li><a href="#">Pediátricos</a></li>
                        </ul>
                    </li>
                    <li><a href="https://resultados.medceu.com.br">Resultado</a></li>
                    <li><a href="index.php#contact">Contato</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a class="appointment-btn scrollto" onclick="window.open('https://api.whatsapp.com/send?phone=5561984249504&amp;text=Olá, estou no site da Medceu e gostaria de mais informações');
      dataLayer.push({
                 'event':'Whatsapp' 
               })" href="#">
                WhatsApp
            </a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1>Convênios</h1>
                <ol>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li>Convênios</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 text-justify">
                    <p>É importante entrar em contato com nossa central de atendimento, tendo em vista que alguns convênios não cobrem determinados exames.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                <?php
                    require_once "convenio.controller.php";
                    require_once "util.php";
                    $convenios = get_convenios();
                    echo html_table($convenios);
                ?>              
                </div>
            </div>
    </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Medceu</h3>
                        <p> </p>
                        <p>
                            SHLN Lote 9, Bloco B <br>
                            Salas 101 a 114 Ed. Biosphere Center<br>
                            Brasília, DF <br><br>
                            <strong>Telefone:</strong> 61 3347-0909 <br>
                            <strong>Email:</strong> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0a9aea6af80a5b8a1adb0aca5eea3afad">sac@medceu.com.br </a><br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Horário de Funcionamento</h4>
                        <ul>
                            <li><a href="#">Seg – Sex:<Br><br> 08:00 às 18:00</a></li>
                            <li> <a href="#">Sab: <br><br>08:00 a 12:00</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Exames</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Densitometria Óssea</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ginecológicos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Exames das Mamas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Medicina Fetal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Medicina Interna</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Obstétricos</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pediátricos</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Diretora Responsável Técnica</h4>
                        <p> Dra. Zilma Eliane Ferreira Alves</p>
                        <p> CRM-DF: 8694</p>
                        <p><img src="assets/img/selo-mama-medceu.png" style="width:140px; height:250px;" alt="Selo CBR"></p>
                    </div>



                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; <strong><span>Medceu</span></strong><br> Todos os Direitos Reservados
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>