<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>@yield('title')</title>

    <!-- Favicons -->
    <link href="template/restaurantly/assets/img/favicon.png" rel="icon">
    <link href="template/restaurantly/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="template/restaurantly/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="template/restaurantly/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="template/restaurantly/assets/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('styles')
    @yield('scripts')
</head>

<body>
    @include('includes.header')
    
    @yield('hero')

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    @include('includes.footer')

    <!-- Vendor JS Files -->
    <script src="template/restaurantly/assets/vendor/aos/aos.js"></script>
    <script src="template/restaurantly/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="template/restaurantly/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="template/restaurantly/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="template/restaurantly/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="template/restaurantly/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="template/restaurantly/assets/js/main.js"></script>
</body>

</html>
