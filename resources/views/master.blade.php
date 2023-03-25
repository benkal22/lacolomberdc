<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title', 'Otherwise, DEFAULT here') </title>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    {{-- {{ View::make('elements.header') }} --}}
    
    {{-- {{ $active_cur = isset($active) ? $active : ""}} --}}

    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@lacolomberdc.com">contact@lacolomberdc.com</a>
        <i class="bi bi-phone"></i> +243 85 016 81 26
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
        <a href="https://web.facebook.com/profile.php?id=100090974634310" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        {{-- <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> --}}
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">FOCOL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ isActive('/') }} nav-link scrollto" href="/">Accueil</a></li>
          <li><a class="{{ isActive('projets') }} nav-link scrollto" href="projets">Projets et zones d'interventions</a></li>
          
          {{-- <li class="dropdown"><a class="{{ isActive('projets') }} nav-link scrollto" href="projets"><span>Projets et zones d'interventions</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="projets">Distribution alimentaire</a></li>
              <li><a href="projets">Création de centres de formations</a></li>
              <li><a href="projets"> Collecte de vêtements</a></li>
              <li><a href="projets">Forage de puits</a></li>
            </ul>
          </li> --}}
          <li><a class="{{ isActive('actualites') }} nav-link scrollto" href="{{ route('actualites') }}">Actualités</a></li>
          <li><a class="{{ isActive('apropos') }} nav-link scrollto" href="apropos">A propos</a></li>
          <li><a class="{{ isActive('contact') }} nav-link scrollto" href="{{ route('contact.index') }}">Nous contacter</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('don') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Faire un don</span></a>

    </div>
  </header><!-- End Header -->
  
    <main id="main">
    
        @yield('content')
    
    </main><!-- End #main -->

    {{ View::make('elements.footer') }}
    
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
