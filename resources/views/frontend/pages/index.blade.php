@extends('frontend.layouts.master')

@section('content')
    <!--==========================
                                                                      Intro Section
                                                                    ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
            {{-- <a href="#about" class="about-btn scrollto">About The Event</a> --}}
        </div>
    </section>

    <main id="main">

        <div class="default-section" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center service-heading animate-box">
                        <h2>Our Awesome Features</h2>
                        {{-- <p>Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the
                            blind texts. </p> --}}
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

            </div>
        </div>

    </main>
@endsection
