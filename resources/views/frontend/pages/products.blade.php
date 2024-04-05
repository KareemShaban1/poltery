@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection

@php
    $bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Products BG')->first();
    $mob_bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Products Mob BG')->first();

@endphp

@push('styles')
    <style>
        .intro-section {
            background: url({{ $bg_image->image_url }});
            background-attachment: fixed;
            width: 100%;
            height: 800px;
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                background: url({{ $mob_bg_image->image_url }});
                background-size: cover;
                background-attachment: fixed;
                background-position-y: 60px;
                /* Adjust other styles as needed for smaller devices */
            }
        }
    </style>
@endpush


@section('content')
    @include('frontend.pages.pages_parts.page_desc')
    <section class="default-section" id="products">

        <div class="container">

            {{-- <div class="row">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>{{ trans('frontend.products') }}</h2>
                </div>
            </div> --}}
            <div class="row" style="text-align: center">
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
                                                <span style="font-family: 'Rubic';">{{ $product->name }}</span>
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
