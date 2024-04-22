<head>
    <meta charset="utf-8">
    <title>AL Abed Poultry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @yield('seo_data')


    <!-- Favicons -->
    <link href="{{ asset('frontend/img/Icon.jpg') }}" rel="icon">
    <link href="{{ asset('frontend/img/Icon.jpg') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
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

    <style>
        /* p {
            margin: 0
        } */

        #header #logo .intro-img {
            position: relative;
            bottom: 15px;
            background: url('{{ asset('frontend/img/logo.png') }}');
            /* height: 70px;
            width: 135px; */
            height: 105px;
            width: 180px;
            background-size: contain;
            background-repeat: no-repeat;
        }



        .header-scrolled #logo .intro-img-2 {
            position: relative;
            bottom: 20px;
            background: url('{{ asset('frontend/img/logo_2.png') }}');
            height: 105px;
            width: 180px;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .header-scrolled #logo .intro-img {
            display: none
        }

        @media (max-width: 991px) {
            #header #logo .intro-img {
                height: 65px;
                bottom: 0;
                width: 120px;
            }

            .header-scrolled #logo .intro-img-2 {
                height: 65px;
                bottom: 0;
                width: 120px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @stack('styles')


</head>
