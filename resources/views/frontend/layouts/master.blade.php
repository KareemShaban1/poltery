<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body>

    @include('frontend.layouts.header')

    <div>

        @yield('content')
    </div>


    @include('frontend.layouts.footer')

    <a href="#" class="back-to-top">
        <span class="visually-hidden">link</span>
        <i class="fa fa-angle-up"></i></a>

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


    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>

    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript File -->
    {{-- <script src="{{ asset('frontend/contactform/contactform.js') }}"></script> --}}

    <!-- Template Main Javascript File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    {{-- <script src="{{ asset('backend/js/toastr.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (session('toast_success'))
            toastr.success("{{ session('toast_success') }}", "", {
                "timeOut": 1000
            }); // Set timeOut to 1000 milliseconds (1 second)
        @endif
        @if (session('toast_error'))
            toastr.error("{{ session('toast_error') }}", "", {
                "timeOut": 1000
            }); // Set timeOut to 1000 milliseconds (1 second)
        @endif
    </script>

    @stack('scripts')


</body>

</html>
