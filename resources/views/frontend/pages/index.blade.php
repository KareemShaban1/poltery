@extends('frontend.layouts.master')

@push('styles')
    <style>
        .intro-section {
            background: url({{ asset('frontend/img/Home.jpg') }});
            /* background-size: cover;
                                                                                                                                                        background-attachment: fixed; */
            background-attachment: fixed;
            width: 100%;
            height: 800px;
            background-size: 100% auto;
            background-repeat: no-repeat;

        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                background: url({{ asset('frontend/img/Home_mob.jpg') }});
                background-size: cover;
                background-attachment: fixed;
                background-position-y: 60px;
                /* Adjust other styles as needed for smaller devices */
            }
        }

        CSS.g-6,
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

@section('content')
    <!--==========================
                                                                                                                                                                                                                                        Intro Section
                                                                                                                                                                                                                                                                                                                ============================-->
    <section id="intro" class="intro-section">
        <div class="intro-container wow fadeIn">
            <div class="intro-content">
                <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
                <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                    data-autoplay="true"></a>
            </div>
        </div>
    </section>

    <main id="main">

        <div class="default-section" id="home-section">
            <div class="container">
                <div class="row" style="text-align: center">
                    <div class="col-md-12 text-center service-heading animate-box section-header">
                        <h2>Our Awesome Features</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box">
                        <div class="services">
                            <i class="icon-laptop"></i>
                            <div class="desc">
                                <h3>Integrated Poultry Production Process</h3>
                                <p>At ElAbed Poultry, we take pride in our vertically integrated approach to production,
                                    which enables us to maintain strict quality control at every stage. From raising day-old
                                    parent stock at our specialized farms to hatching eggs in our state-of-the-art
                                    incubation laboratories, and breeding the ducklings at our commercial farms, we
                                    meticulously oversee every aspect of the production process. We even ensure the highest
                                    standards of nutrition by feeding our birds with specially formulated vegetarian
                                    products from ElAbed Feed Mill.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="services">
                            <i class="icon-server"></i>
                            <div class="desc">
                                <h3>Customer Satisfaction</h3>
                                <p>One of our core values is a commitment to meeting the diverse needs of our customers.
                                    Whether you're a local or international market, we strive to provide you with the finest
                                    poultry products that are both healthy and delicious. We understand that quality and
                                    freshness are paramount, and that's why we prioritize ethical practices in our
                                    operations. Our birds are slaughtered under Islamic ritual at ElAbed slaughterhouse,
                                    ensuring adherence to religious guidelines and providing our customers with peace of
                                    mind. All of our products are 100% Halal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="services">
                            <i class="icon-money"></i>
                            <div class="desc">
                                <h3>Commitment to Excellence</h3>
                                <p>As we continue to grow, we remain committed to our core values of integrity, quality, and
                                    customer satisfaction. We believe in fostering long-term partnerships with our customers
                                    and stakeholders, and we strive to exceed expectations at every turn. Join us on our
                                    journey as we continue to make a positive impact on the poultry industry, one delicious
                                    and nutritious product at a time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box">
                        <div class="services">
                            <i class="icon-tablet"></i>
                            <div class="desc">
                                <h3>Quality Assurance</h3>
                                <p>Choose ElAbed Poultry for unrivaled quality, trusted expertise, and a commitment to
                                    excellence. Experience the difference that comes from a company deeply rooted in its
                                    heritage, yet constantly evolving to meet the demands of the modern market.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="d-flex" style="justify-content: space-between;">
                    <div style="display: flex; display: flex;flex-direction: column;align-items: center;">
                        <div>
                            <img src="{{ asset('frontend/img/Home_mob.jpg') }}" height="50" width="50"
                                alt="">
                        </div>
                        <p style="margin: 5px 0px">5</p>
                        <p> million ducks per year</p>
                    </div>

                    <div style="display: flex; display: flex;flex-direction: column;align-items: center;">
                        <div>
                            <img src="{{ asset('frontend/img/Home_mob.jpg') }}" height="50" width="50"
                                alt="">
                        </div>
                        <p style="margin: 5px 0px">X</p>
                        <p> quails per year</p>
                    </div>

                    <div style="display: flex; display: flex;flex-direction: column;align-items: center;">
                        <div>
                            <img src="{{ asset('frontend/img/Home_mob.jpg') }}" height="50" width="50"
                                alt="">
                        </div>
                        <p style="margin: 5px 0px">+2000</p>
                        <p> retail outlets </p>
                    </div>

                    <div style="display: flex; display: flex;flex-direction: column;align-items: center;">
                        <div>
                            <img src="{{ asset('frontend/img/Home_mob.jpg') }}" height="50" width="50"
                                alt="">
                        </div>
                        <p style="margin: 5px 0px">X</p>
                        <p>farms across egypt</p>
                    </div>
                </div> --}}
                <section class="bg-light py-5 py-xl-6">

                    <div class="container overflow-hidden">
                        <div class="row gy-5 gy-md-6 gy-lg-0">
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/duck_icon.png') }}" alt="">


                                    </div>
                                    <h5 class="display-6 fw-bold m-1">5</h5>
                                    <p class="text-secondary m-0">Million ducks per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/quail_icon.png') }}" alt="">


                                    </div>
                                    <h5 class="display-6 fw-bold m-1">X</h5>
                                    <p class="text-secondary m-0">Quails per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/retail_icon.png') }}" alt="">

                                    </div>
                                    <h5 class="display-6 fw-bold m-1">+2000</h5>
                                    <p class="text-secondary m-0">Retail outlets</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <img src="{{ asset('frontend/img/icons/farm_icon.png') }}" alt="">

                                    </div>
                                    <h5 class="display-6 fw-bold m-1">X</h5>
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
