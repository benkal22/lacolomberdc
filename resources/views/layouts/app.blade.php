<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title', '')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
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
            <h1 class="logo me-auto">
                <a href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="{{ isActive('/') }} nav-link scrollto" href="{{ route('/') }}">Accueil</a></li>
                    <li><a class="{{ isActive('projets') }} nav-link scrollto" href="{{ route('projets') }}">Projets et zones d'interventions</a></li>
                    <li><a class="{{ isActive('actualites') }} nav-link scrollto" href="{{ route('actualites') }}">Actualités</a></li>
                    <li><a class="{{ isActive('apropos') }} nav-link scrollto" href="{{ route('apropos') }}">A propos</a></li>
                    <li><a class="{{ isActive('contacts') }} nav-link scrollto" href="{{ route('contacts') }}">Nous contacter</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            {{-- <a href="{{ route('dons.index') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Faire un don</span></a> --}}
            <a href="{{ route('dons') }}" class="appointment-btn scrollto">Faire un don</a>

            </div>
        </header><!-- End Header -->

        <main class="py-4">
            @yield('content')
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>FOCOL</h3>
                    <p>
                    108b, By-Pass, <br>
                    C/Selembao, Q.Ngafani<br>
                    Kinshasa-RDC <br><br>
                    <strong>Téléphone :</strong> +1 206 670-6915<br>
                    <strong>Email :</strong> contact@lacolomberdc.com<br>
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Liens favoris</h4>
                    <ul>
                        <ul>
                            <li><a class="{{ isActive('/') }} nav-link scrollto" href="{{ route('/') }}">Accueil</a></li>
                            <li><a class="{{ isActive('projets') }} nav-link scrollto" href="{{ route('projets') }}">Projets et zones d'interventions</a></li>
                            <li><a class="{{ isActive('actualites') }} nav-link scrollto" href="{{ route('actualites') }}">Actualités</a></li>
                            <li><a class="{{ isActive('apropos') }} nav-link scrollto" href="{{ route('apropos') }}">A propos</a></li>
                            <li><a class="{{ isActive('contact') }} nav-link scrollto" href="{{ route('contacts') }}">Nous contacter</a></li>
                        </ul>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Nos projets</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('projets') }}">Distribution alimentaire</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('projets') }}">Création de centres de formations</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('projets') }}">Collecte de vêtements</a></li>
                        {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('projets') }}">Forage de puits</a></li> --}}
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Inscrivez-vous à notre newsletter</h4>
                    <p></p>
                    <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="S'inscrire">
                    </form>
                </div> --}}

                </div>
            </div>
            </div>

            <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                &copy; Copyright <strong><span>Fondation La Colombe </span></strong>. Tous droits réservés.
                </div>
                <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                    Créé par <a href="https://benkalsoft.com/">Ben Kaluseyiko Diansosa</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
                <a href="https://web.facebook.com/profile.php?id=100090974634310" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                {{-- <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> --}}
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                {{-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
            </div>
            </div>
        </footer><!-- End Footer -->
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>
</html>
