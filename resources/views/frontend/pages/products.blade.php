@extends('frontend.layouts.master')
@push('styles')
    <style>
        .shell {
            padding: 80px 0;
        }

        .wsk-cp-product {
            background: #fff;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            position: relative;
            margin: 20px auto;
        }

        .wsk-cp-img {
            position: absolute;
            top: 5px;
            left: 50%;
            transform: translate(-50%);
            -webkit-transform: translate(-50%);
            -ms-transform: translate(-50%);
            -moz-transform: translate(-50%);
            -o-transform: translate(-50%);
            -khtml-transform: translate(-50%);
            width: 100%;
            padding: 15px;
            transition: all 0.2s ease-in-out;
        }

        .wsk-cp-img img {
            width: 100%;
            transition: all 0.2s ease-in-out;
            border-radius: 6px;
        }

        .wsk-cp-product:hover .wsk-cp-img {
            top: -40px;
        }

        .wsk-cp-product:hover .wsk-cp-img img {
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
        }

        .wsk-cp-text {
            padding-top: 100%;
        }

        .wsk-cp-text .category {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            padding: 5px;
            margin-bottom: 45px;
            position: relative;
            transition: all 0.2s ease-in-out;
        }

        .wsk-cp-text .category>* {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -khtml-transform: translate(-50%, -50%);

        }

        .wsk-cp-text .category>span {
            padding: 12px 30px;
            border: 1px solid #313131;
            background: #212121;
            color: #fff;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            border-radius: 27px;
            transition: all 0.05s ease-in-out;

        }

        .wsk-cp-product:hover .wsk-cp-text .category>span {
            border-color: #ddd;
            box-shadow: none;
            padding: 11px 28px;
        }

        .wsk-cp-product:hover .wsk-cp-text .category {
            margin-top: 0px;
        }

        .wsk-cp-text .title-product {
            text-align: center;
        }

        .wsk-cp-text .title-product h3 {
            font-size: 20px;
            font-weight: bold;
            margin: 15px auto;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            width: 100%;
        }

        .wsk-cp-text .description-prod p {
            margin: 0;
        }

        /* Truncate */
        .wsk-cp-text .description-prod {
            text-align: center;
            width: 100%;
            height: 62px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 15px;
        }

        .card-footer {
            padding: 25px 0 5px;
            border-top: 1px solid #ddd;
        }

        .card-footer:after,
        .card-footer:before {
            content: '';
            display: table;
        }

        .card-footer:after {
            clear: both;
        }

        /* .card-footer .wcf-footer-left {
                float: left;

            }

            .card-footer .wcf-footer-right {
                float: right;
            } */

        .price {
            font-size: 18px;
            font-weight: bold;
        }

        a.buy-btn {
            display: block;
            color: #212121;
            text-align: center;
            font-size: 18px;
            width: 35px;
            height: 35px;
            line-height: 35px;
            border-radius: 50%;
            border: 1px solid #212121;
            transition: all 0.2s ease-in-out;
        }

        a.buy-btn:hover,
        a.buy-btn:active,
        a.buy-btn:focus {
            border-color: #f82249;
            background: #f82249;
            color: #fff;
            text-decoration: none;
        }

        .wsk-btn {
            display: inline-block;
            color: #212121;
            text-align: center;
            font-size: 18px;
            transition: all 0.2s ease-in-out;
            border-color: #FF9800;
            background: #FF9800;
            padding: 12px 30px;
            border-radius: 27px;
            margin: 0 5px;
        }

        .wsk-btn:hover,
        .wsk-btn:focus,
        .wsk-btn:active {
            text-decoration: none;
            color: #fff;
        }

        .red {
            color: #F44336;
            font-size: 22px;
            display: inline-block;
            margin: 0 5px;
        }

        @media screen and (max-width: 991px) {
            .wsk-cp-product {
                margin: 40px auto;
            }

            .wsk-cp-product .wsk-cp-img {
                top: -40px;
            }

            .wsk-cp-product .wsk-cp-img img {
                box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
            }

            .wsk-cp-product .wsk-cp-text .category>span {
                border-color: #ddd;
                box-shadow: none;
                padding: 11px 28px;
            }

            .wsk-cp-product .wsk-cp-text .category {
                margin-top: 0px;
            }

            a.buy-btn {
                border-color: #f82249;
                background: #f82249;
                color: #fff;
            }
        }
    </style>
@endpush

@section('content')
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a>
            {{-- <a href="#about" class="about-btn scrollto">About The Event</a> --}}
        </div>
    </section>

    <!--==========================
                                                                                                                                                  Venue Section
                                                                                                                                                ============================-->
    {{-- <section id="venue" class="wow fadeInUp">

        <div class="container-fluid">

            <div class="section-header">
                <h2>Event Venue</h2>
                <p>Event venue location info and gallery</p>
            </div>

            <div class="row no-gutters">
                <div class="col-lg-6 venue-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 venue-info">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-8">
                            <h3>Downtown Conference Center, New York</h3>
                            <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est
                                quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et
                                ea suscipit enim nesciunt quia velit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid venue-gallery-container">
            <div class="row no-gutters">

                <div>
                    <ul class="nav nav-fill nav-tabs" id="myTab" role="tablist">
                        @foreach ($productCategory as $category)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link{{ $loop->first ? ' active' : '' }}"
                                    id="{{ $category->name_en }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{ $category->name_en }}" type="button" role="tab"
                                    aria-controls="{{ $category->name_en }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                    {{ $category->name_en }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($productCategory as $category)
                            <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}" id="{{ $category->name_en }}"
                                role="tabpanel" aria-labelledby="{{ $category->name_en }}-tab">
                                <div class="row">
                                    @php
                                        $products = App\Models\Product::where('category_id', $category->id)->get();
                                    @endphp
                                    @foreach ($products as $product)
                                        <div class="col-lg-3 col-md-4">
                                            <div>
                                                <p>{{ $product->name_en }}</p>
                                            </div>
                                            <div class="venue-gallery">
                                                <a href="{{ $product->image_url }}" class="venobox"
                                                    data-gall="venue-gallery">
                                                    <img src="{{ $product->image_url }}" alt="{{ $product->name_en }}"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



            </div>
        </div>



    </section> --}}
    <div class="container">

        <div class="row pt-5">
            <div class="col-md-12 text-center service-heading animate-box">
                <h2>{{ trans('frontend.products') }}</h2>
            </div>
        </div>
        <div>
            <div class="shell">
                <div class="container">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="{{ $product->image_url }}" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>{{ $product->name }}</span>
                                        </div>
                                        {{-- <div class="title-product">
                                        <h3>My face not my heart</h3>
                                    </div>
                                    <div class="description-prod">
                                        <p>Description Product tell me how to change playlist height size like 600px in
                                            html5
                                            player. player good work now check this link</p>
                                    </div> --}}
                                        <div class="card-footer">
                                            <div class="wcf-footer-left">
                                                <span class="price">{{ $product->productCategory->name }}</span>
                                            </div>
                                            <div class="wcf-footer-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
