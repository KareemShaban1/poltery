<head>
    <base href="">
    <title> @yield('title')
    </title>


    {{-- @yield('seo_data') --}}

    @include('backend.dashboard.layouts.default_seo_data')


    <link rel="shortcut icon" href="{{ asset('backend/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="{{ asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />


    @if (App::getLocale() == 'ar')
        <link href="{{ asset('backend/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/plugins/global/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .header {
                direction: rtl
            }
        </style>
    @else
        <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/plugins/global/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <style>
            .header {
                direction: ltr
            }
        </style>
    @endif
    <link href="{{ asset('backend/datatables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/summernote-lite.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@latest/dist/summernote-bs4.min.css" rel="stylesheet">



    @stack('styles')

</head>
