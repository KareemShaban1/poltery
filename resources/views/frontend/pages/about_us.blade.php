@extends('frontend.layouts.master')

@push('styles')
    <style>
        .intro-section {
            background: url({{ asset('frontend/img/About_Us.jpg') }});
            /* background-size: cover;
                background-attachment: fixed; */
            background-attachment: fixed;
            width: 100%;
            height: 800px;
            /* background-size: contain; */
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                background: url({{ asset('frontend/img/About_Us_mob.jpg') }});
                background-size: cover;
                background-attachment: fixed;
                background-position-y: 60px;
                /* Adjust other styles as needed for smaller devices */
            }
        }
    </style>
@endpush

@section('content')
    <section id="intro" class="intro-section">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>

        </div>
    </section>
    <section class="default-section" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>About Us</h2>
                </div>
            </div>
            {{-- elabed.png --}}

            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="services">
                        <i class="icon-laptop"></i>
                        <div class="desc">
                            <h3>Our Story</h3>
                            <p>Welcome to ElAbed Poultry, Egypt's Leading Duck and Quail provider with a rich history rooted
                                in family values and a commitment to delivering the highest quality poultry products.
                                Founded in 1985 by Mr. Abed Ramsis, our company has steadily grown from a small, humble farm
                                into a thriving enterprise with over 40 farms spread across Egypt.</p>
                        </div>
                    </div>
                    <div class="services">
                        <i class="icon-laptop"></i>
                        <div class="desc">
                            <h3>Our Mission</h3>
                            <p>At El Abed Poultry, our mission is clear: to be Egypt's poultry leader by consistently
                                delivering the highest quality products to our customers. We are committed to raising
                                cage-free, hormone-free, and antibiotic-free birds, ensuring their well-being and the
                                production of wholesome poultry. Our dedication extends beyond the farm, as we carefully
                                select the finest corn and soy to create a 100% vegetarian diet for our birds. We take pride
                                in our quality assurance process, which includes slaughtering the birds under Islamic ritual
                                at our own abattoir, and utilizing state-of-the-art commercial freezers to freeze the
                                processed birds at -40°C. With every step we take, our mission is to provide exceptional
                                poultry that meets the highest standards of quality, integrity, and customer satisfaction.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 animate-box"
                    style="display: flex; justify-content:center;flex-direction: column;
                align-items: center; gap:20px">

                    <img class="owner-image" src="{{ asset('frontend/img/elabed.png') }}" alt="">

                    <h2 class="m-0">Abed Ramsis</h2>
                    <p class="m-0">Founder & CEO</p>

                </div>
            </div>


        </div>
    </section>
    @include('frontend.pages.pages_parts.sponsers')
@endsection
