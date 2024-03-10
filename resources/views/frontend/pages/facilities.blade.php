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
            padding-top: 120%;
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

        .card-footer .wcf-left {
            float: left;

        }

        .card-footer .wcf-right {
            float: right;
        }

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
            border-color: #FF9800;
            background: #FF9800;
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
                border-color: #FF9800;
                background: #FF9800;
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

    <div class="container">

        <div class="row pt-5">
            <div class="col-md-12 text-center service-heading animate-box">
                <h2>Facilities</h2>
            </div>
        </div>
        <div>
            <div class="shell">
                <div class="container">
                    <div class="row">
                        @foreach ($facilities as $facility)
                            <div class="col-md-3">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="{{ $facility->image_url }}" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>{{ $facility->name }}</span>
                                        </div>
                                        {{-- <div class="title-product">
                                        <h3>My face not my heart</h3>
                                    </div> --}}
                                        <div class="description-prod">
                                            <p>{{ $facility->content }}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left">
                                                <span class="price">{{ $facility->facilityCategory->name_en }}</span>
                                            </div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
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
