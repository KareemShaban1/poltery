@extends('frontend.layouts.master')
@push('styles')
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
                                            <p>{!! $facility->content !!}</p>
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
