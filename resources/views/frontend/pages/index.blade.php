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
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-people text-white" viewBox="0 0 16 16">
                                            <path
                                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                        </svg> --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                            viewBox="0 0 24 24">
                                            <!-- Duck body -->
                                            <circle cx="12" cy="15" r="6" fill="#FFD700" />

                                            <!-- Duck head -->
                                            <circle cx="10" cy="11" r="4" fill="#FFD700" />

                                            <!-- Duck eye -->
                                            <circle cx="11.5" cy="10" r="0.5" fill="black" />

                                            <!-- Duck beak -->
                                            <path d="M12,12 L12,14 L14,13 Z" fill="#FFA500" />

                                            <!-- Duck wing -->
                                            <path d="M16,13 Q18,11 16,9" fill="#FFD700" />

                                            <!-- Duck feet -->
                                            <path d="M11,18 L10,20 M13,18 L14,20" stroke="#FFA500" stroke-width="1" />
                                        </svg>


                                    </div>
                                    <h5 class="display-6 fw-bold m-1">5</h5>
                                    <p class="text-secondary m-0">million ducks per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="100"
                                            height="100">
                                            <!-- Quail body -->
                                            <circle cx="12" cy="15" r="6" fill="#A0522D" />

                                            <!-- Quail head -->
                                            <circle cx="10" cy="11" r="4" fill="#A0522D" />

                                            <!-- Quail eye -->
                                            <circle cx="11.5" cy="10" r="0.5" fill="black" />

                                            <!-- Quail beak -->
                                            <path d="M12,12 L12,14 L14,13 Z" fill="#FFA500" />

                                            <!-- Quail wing -->
                                            <path d="M16,13 Q18,11 16,9 Q14,11 16,13 Z" fill="#A0522D" />

                                            <!-- Quail feet -->
                                            <path d="M11,18 L10,20 M13,18 L14,20" stroke="#FFA500" stroke-width="1" />
                                        </svg>


                                    </div>
                                    <h5 class="display-6 fw-bold m-1">X</h5>
                                    <p class="text-secondary m-0">quails per year</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-briefcase text-white" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <h5 class="display-6 fw-bold m-1">+2000</h5>
                                    <p class="text-secondary m-0">retail outlets</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div
                                        class="d-flex align-items-center justify-content-center bg-primary rounded-circle w-100px h-100px mb-3 mx-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                            fill="currentColor" class="bi bi-award text-white" viewBox="0 0 16 16">
                                            <path
                                                d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                                            <path
                                                d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                        </svg>
                                    </div>
                                    <h5 class="display-6 fw-bold m-1">X</h5>
                                    <p class="text-secondary m-0">farms across egypt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

    </main>
@endsection
