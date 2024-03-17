<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('frontend/img/Icon.jpg') }}" rel="icon">
    <link href="{{ asset('frontend/img/Icon.jpg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('frontend/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- CSS file imports -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->

    @if (App::getLocale() == 'en')
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('frontend/css/rtl_style.css') }}" rel="stylesheet">
    @endif

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

    @stack('styles')


</head>

<body>

    @include('frontend.layouts.header')

    <div>


        @yield('content')
    </div>


    @include('frontend.layouts.footer')

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('frontend/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('frontend/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('frontend/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>


</body>

</html>
