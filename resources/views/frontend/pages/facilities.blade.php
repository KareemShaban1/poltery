@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection
@php
    $bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Facilities BG')->first();
    $mob_bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Facilities Mob BG')->first();

@endphp
@push('styles')
    <style>
        .intro-section {
            background: url({{ $bg_image->image_url }});
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
                background: url({{ $mob_bg_image->image_url }});
                background-size: cover;
                background-attachment: fixed;
                /* Adjust other styles as needed for smaller devices */
            }
        }

        img {
            max-width: 100%;
            vertical-align: top;
        }

        .gallery {
            display: flex;
            margin: 10px auto;
            max-width: 600px;
            position: relative;
            padding-top: 66.6666666667%;
        }

        @media screen and (min-width: 600px) {
            .gallery {
                padding-top: 400px;
            }
        }

        .gallery__img {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery__thumb {
            padding-top: 6px;
            margin: 6px;
            display: block;
        }

        .gallery__selector {
            position: absolute;
            opacity: 0;
            visibility: hidden;
        }

        .gallery__selector:checked+.gallery__img {
            opacity: 1;
        }

        .gallery__selector:checked~.gallery__thumb>img {
            box-shadow: 0 0 0 3px #0be2f6;
        }
    </style>
@endpush

@section('content')
    <section id="intro" class="intro-section">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0 slogan">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>

        </div>
    </section>

    <section class="default-section" id="facilities">
        <div class="container">

            <div class="row" style="text-align: center">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>Facilities</h2>

                </div>
            </div>
            <div>
                <div class="shell">
                    <div class="container">
                        <div class="row">
                            @foreach ($facilities as $facility)
                                <div class="col-md-12">
                                    <div class="wsk-cp-product">

                                        <div class="row">
                                            <div class="col-md-6 p-0"
                                                style="display: flex;
                                            align-items: center">

                                                <div class="container-fluid venue-gallery-container">
                                                    <div class="row no-gutters"
                                                        style="justify-content: center; align-items: center;">


                                                        <div class="col-lg-6 col-md-6" style="padding: 0px 5px">
                                                            <div class="venue-gallery">
                                                                <a href="{{ $facility->image_url }}" class="venobox"
                                                                    data-gall="venue-gallery">
                                                                    <img src="{{ $facility->image_url }}" alt=""
                                                                        class="img-fluid">
                                                                </a>
                                                            </div>

                                                        </div>

                                                        @php
                                                            $additional_image = App\Models\Image::where(
                                                                'facility_id',
                                                                $facility->id,
                                                            )->first();
                                                        @endphp

                                                        @isset($additional_image)
                                                            <div class="col-lg-6 col-md-6" style="padding: 0px 5px">
                                                                <div class="venue-gallery">
                                                                    <a href="{{ $additional_image->image_url }}" class="venobox"
                                                                        data-gall="venue-gallery">
                                                                        <img src="{{ $additional_image->image_url }}"
                                                                            alt="" class="img-fluid">
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        @endisset



                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-md-6" style="padding: 0px 5px">

                                                <div class="facility-name">
                                                    <span
                                                        style="font-weight: bold; color:#f82249">{{ $facility->name }}</span>
                                                </div>

                                                <div class="description-prod">
                                                    <p>{!! $facility->content !!}</p>
                                                </div>

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
    </section>
@endsection
