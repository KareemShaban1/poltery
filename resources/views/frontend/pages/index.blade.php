@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection

@php
    $bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Home BG')->first();
    $mob_bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Home Mob BG')->first();

@endphp
@push('styles')
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">


    <style>
        .intro-section {
            width: 100%;
            height: 800px;

        }

        .background-clip {
            object-fit: fill;

        }

        .intro-section {
            height: 705px;
        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                width: 100%;
                height: 350px;
                background-color: black
            }

            #intro .intro-container {
                top: 70px;
                height: 200px;
            }

            .section-header h2 {
                font-size: 30px
            }

            .desc {
                margin-bottom: 40px
            }

            .home-title {
                font-size: 26px;
            }
        }

        .g-6,
        .gx-6 {
            --bs-gutter-x: 4.5rem;
        }

        .g-6,
        .gy-6 {
            --bs-gutter-y: 4.5rem;
        }

        @media (min-width: 576px) {

            .g-sm-6,
            .gx-sm-6 {
                --bs-gutter-x: 4.5rem;
            }

            .g-sm-6,
            .gy-sm-6 {
                --bs-gutter-y: 4.5rem;
            }
        }

        @media (min-width: 768px) {

            .g-md-6,
            .gx-md-6 {
                --bs-gutter-x: 4.5rem;
            }

            .g-md-6,
            .gy-md-6 {
                --bs-gutter-y: 4.5rem;
            }
        }

        @media (min-width: 992px) {

            .g-lg-6,
            .gx-lg-6 {
                --bs-gutter-x: 4.5rem;
            }

            .g-lg-6,
            .gy-lg-6 {
                --bs-gutter-y: 4.5rem;
            }
        }

        @media (min-width: 1200px) {

            .g-xl-6,
            .gx-xl-6 {
                --bs-gutter-x: 4.5rem;
            }

            .g-xl-6,
            .gy-xl-6 {
                --bs-gutter-y: 4.5rem;
            }
        }

        @media (min-width: 1400px) {

            .g-xxl-6,
            .gx-xxl-6 {
                --bs-gutter-x: 4.5rem;
            }

            .g-xxl-6,
            .gy-xxl-6 {
                --bs-gutter-y: 4.5rem;
            }
        }

        .mb-6 {
            margin-bottom: 4.5rem !important;
        }

        .py-6 {
            padding-top: 4.5rem !important;
            padding-bottom: 4.5rem !important;
        }

        .w-100px {
            width: 100px !important;
        }

        .h-100px {
            height: 100px !important;
        }

        @media (min-width: 576px) {
            .mb-sm-6 {
                margin-bottom: 4.5rem !important;
            }

            .py-sm-6 {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }
        }

        @media (min-width: 768px) {
            .mb-md-6 {
                margin-bottom: 4.5rem !important;
            }

            .py-md-6 {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }
        }

        @media (min-width: 992px) {
            .mb-lg-6 {
                margin-bottom: 4.5rem !important;
            }

            .py-lg-6 {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }
        }

        @media (min-width: 1200px) {
            .mb-xl-6 {
                margin-bottom: 4.5rem !important;
            }

            .py-xl-6 {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }
        }

        @media (min-width: 1400px) {
            .mb-xxl-6 {
                margin-bottom: 4.5rem !important;
            }

            .py-xxl-6 {
                padding-top: 4.5rem !important;
                padding-bottom: 4.5rem !important;
            }
        }

        #intro .intro-container {
            height: 280px;
            display: flex;
            flex-direction: column;
            align-items: center
        }

        .intro-content {
            display: flex;
            flex-direction: column;
            align-items: center
        }
    </style>
@endpush

@php
    $metaData = App\Models\WebsiteInfo::pluck('value', 'key')->toArray();
    $home_video = App\Models\Video::where('type', 'home_video')->where('title', 'home_video')->first() ?? null;
@endphp


@section('content')
    <section class="intro-section">
        <video preload="none" autoplay muted loop class="background-clip">
            <source src="{{ $home_video->video_url ?? asset('frontend/img/home_video.mp4') }}" type="video/mp4">
            <source src="{{ $home_video->video_url ?? asset('frontend/img/home_video.mp4') }}" type="video/ogg">
        </video>

        <div class="intro-container-home wow fadeIn">
            <div class="intro-content">
                <h1 class="mb-1 pb-0 company-title">ElAbed <span>Poultry</span></h1>
                <p class="mb-4 pb-0 slogan">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>
                <p class="mb-4 pb-0 slogan-mob">FROM OUR FARMS TO YOUR TABLE <br> THE BEST QUALITY YOU CAN FIND</p>
            </div>
        </div>

    </section>





    <main id="main">

        @php
            if (App::getLocale() == 'ar') {
                $home_info = App\Models\WebsiteInfo::where('type', 'home_content')->where('language', 'arabic')->get();
            } else {
                $home_info = App\Models\WebsiteInfo::where('type', 'home_content')->where('language', 'english')->get();
            }

            $counts = App\Models\WebsiteInfo::where('type', 'counts')->pluck('value', 'key')->toArray();

        @endphp
        <div id="home-section" style="padding: 30px 0;">
            <div class="container">
                <div class="row" style="text-align: center">
                    <div class="col-md-12 text-center service-heading animate-box section-header">
                        <h2>Our Awesome Features</h2>

                    </div>
                </div>
                <div class="row">
                    @foreach ($home_info as $info)
                        <div class="col-md-6 animate-box">
                            <div class="services">
                                <i class="icon-laptop"></i>
                                <div class="desc">
                                    <h3 class="home-title">{{ $info->key }}</h3>
                                    <p class="home-desc">{!! $info->value ?? '' !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


                <section class="bg-light py-5 py-xl-6">

                    <div class="container overflow-hidden">
                        <div class="row gy-5 gy-md-6 gy-lg-0">
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/duck_icon.png') }}" alt="">


                                    </div>
                                    <div style="display: flex; justify-content: center">
                                        <h5 class="display-6 fw-bold m-1">+</h5>
                                        <h5 class="display-6 fw-bold m-1" data-toggle="counter-up">{!! $counts['ducks_counts'] ?? '' !!}
                                        </h5>
                                    </div>
                                    <p class="text-secondary m-0">Ducks per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/quail_icon.png') }}" alt="">


                                    </div>
                                    <div style="display: flex; justify-content: center">
                                        <h5 class="display-6 fw-bold m-1">+</h5>
                                        <h5 class="display-6 fw-bold m-1" data-toggle="counter-up">{!! $counts['quails_counts'] ?? '' !!}
                                        </h5>
                                    </div>
                                    <p class="text-secondary m-0">Quails per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/retail_icon.png') }}" alt="">

                                    </div>
                                    <div style="display: flex; justify-content: center">
                                        <h5 class="display-6 fw-bold m-1">+</h5>
                                        <h5 class="display-6 fw-bold m-1" data-toggle="counter-up">{!! $counts['retail_counts'] ?? '' !!}
                                        </h5>
                                    </div>
                                    <p class="text-secondary m-0">Retail outlets</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/farm_icon.png') }}" alt="">

                                    </div>
                                    <div style="display: flex; justify-content: center">
                                        <h5 class="display-6 fw-bold m-1">+</h5>
                                        <h5 class="display-6 fw-bold m-1" data-toggle="counter-up">{!! $counts['farms_count'] ?? '' !!}
                                        </h5>
                                    </div>
                                    <p class="text-secondary m-0">Farms across egypt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </main>
@endsection

@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <!-- Include jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script> --}}

    <script>
        $('[data-toggle="counter-up"]').counterUp({
            delay: 10,
            time: 2000,
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {



            // Initialize Magnific Popup
            // $.magnificPopup.open({
            //     items: {
            //         src: '#video-popup' // ID of the video popup content
            //     },
            //     type: 'inline',
            //     preloader: true,
            //     modal: true
            // });

            // // Close the popup when the close button is clicked
            // $('#close-btn').on('click', function() {
            //     $.magnificPopup.close(); // Close the popup when the button is clicked
            // });


        });
    </script>
@endpush
