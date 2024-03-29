@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection

@push('styles')
    <style>
        .intro-section {
            background: url({{ asset('frontend/img/new/products.jpg') }});
            background-attachment: fixed;
            width: 100%;
            height: 800px;
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                background: url({{ asset('frontend/img/Our_Products_mob.jpg') }});
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

    <section class="default-section" id="products">

        <div class="container">

            <div class="row pt-5">
                <div class="col-md-12 text-center service-heading animate-box section-header">
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

                                            {{-- <div class="card-footer">
                                                <div class="wcf-footer-left">
                                                    <a style="text-decoration: none"
                                                        href="{{ route('products.productCategory', $product->productCategory->id) }}">
                                                        <span
                                                            class="price">{{ $product->productCategory->name }}</span></a>
                                                </div>

                                            </div> --}}
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
