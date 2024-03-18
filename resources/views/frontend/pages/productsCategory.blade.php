@extends('frontend.layouts.master')


@section('content')
    <section id="intro"
        style="background: url({{ asset('frontend/img/Our_Products.jpg') }}); background-size:cover; background-attachment: fixed">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>

        </div>
    </section>

    <section class="default-section" id="productCategory">

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

                                            <div class="card-footer">
                                                <div class="wcf-footer-left">
                                                    <span class="price">{{ $product->productCategory->name }}</span>
                                                </div>
                                                {{-- <div class="wcf-footer-right"><a href="#" class="buy-btn"><i
                                                            class="zmdi zmdi-shopping-basket"></i></a></div> --}}
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
