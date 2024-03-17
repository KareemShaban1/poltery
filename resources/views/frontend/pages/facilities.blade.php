@extends('frontend.layouts.master')
@push('styles')
    <style>
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
    <section id="intro"
        style="background: url({{ asset('frontend/img/Facilities.jpg') }}); background-size:cover; background-attachment: fixed">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a> --}}
            {{-- <a href="#about" class="about-btn scrollto"></a> --}}
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
                            {{-- <div class="col-md-4">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="{{ $facility->image_url }}" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="owl-carousel gallery-carousel">
                                        <a href="{{ $facility->image_url }}" class="venobox"
                                            data-gall="gallery-carousel"><img src="{{ $facility->image_url }}"
                                                alt=""></a>
                                        <a href="{{ $facility->image_url }}" class="venobox"
                                            data-gall="gallery-carousel"><img src="{{ $facility->image_url }}"
                                                alt=""></a>
                                        <a href="{{ $facility->image_url }}" class="venobox"
                                            data-gall="gallery-carousel"><img src="{{ $facility->image_url }}"
                                                alt=""></a>

                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>{{ $facility->name }}</span>
                                        </div>

                                        <div class="description-prod">
                                            <p>{!! $facility->content !!}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left">
                                                <span
                                                    class="price">{{ $facility->facilityCategory ? $facility->facilityCategory->name_en : '' }}</span>
                                            </div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-md-12">
                                <div class="wsk-cp-product">

                                    <div class="row">
                                        <div class="col-md-6 p-0 ">

                                            <div class="container-fluid venue-gallery-container">
                                                <div class="row no-gutters" style="justify-content: center">


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
                                                        // dd($additional_image);
                                                    @endphp

                                                    @isset($additional_image)
                                                        <div class="col-lg-6 col-md-6" style="padding: 0px 5px">
                                                            <div class="venue-gallery">
                                                                <a href="{{ $additional_image->image_url }}" class="venobox"
                                                                    data-gall="venue-gallery">
                                                                    <img src="{{ $additional_image->image_url }}" alt=""
                                                                        class="img-fluid">
                                                                </a>
                                                            </div>

                                                        </div>
                                                    @endisset



                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6" style="padding: 0px 5px">

                                            <div class="category">
                                                <span style="font-weight: bold; color:#f82249">{{ $facility->name }}</span>
                                            </div>

                                            <div class="description-prod">
                                                <p>{!! $facility->content !!}</p>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>{{ $facility->name }}</span>
                                        </div>

                                        <div class="description-prod">
                                            <p>{!! $facility->content !!}</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left">
                                                <span
                                                    class="price">{{ $facility->facilityCategory ? $facility->facilityCategory->name_en : '' }}</span>
                                            </div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"></i></a></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
