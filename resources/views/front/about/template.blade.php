<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @stack('meta-seo')
    <title>Salimah Kubu Raya</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/artikel/img/logo.png') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/artikel/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/artikel/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/artikel/css/about.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @stack('css')
</head>

<body>
    <!-- Responsive navbar-->
    @include('front.layout.navbar')
    <!-- Page header with logo and tagline-->



    @yield('content')

    <!-- Footer-->
    @include('front.layout.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/artikel/js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    @stack('js')
</body>

<style>
    .header {
        background-image: linear-gradient(rgba(98, 11, 239, 0.285), rgba(255, 255, 255, 1)), url("../../assets/images/background.jpeg");
        /* background-color: rgba(255, 255, 255, 0.5); */
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-position: center;
        height: 800px;
    }

    .navbar-custom {
        background-color: #7b0995;
        /* Warna ungu */
    }

    .navbar-custom .nav-link {
        color: #ffffff;
        /* Warna teks */
    }

    .nav-putih {
        color: #ffffff;
        /* Warna teks */
    }
</style>

</html>
