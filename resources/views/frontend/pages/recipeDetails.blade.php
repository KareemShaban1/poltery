@extends('frontend.layouts.master')

@push('styles')
    <style>
        #card-container {
            background: #ededed;
            box-shadow: 0px 0px 200px #999;
            font-family: 'Oxygen', sans-serif;
            /* width: 65%; */
            /* height: 385px; */
            /* margin: 5% auto; */
        }

        #card-title {
            font-family: 'Oxygen', sans-serif;
            font-weight: 700;
            font-size: 25px;
            background: #455560;
            padding: 15px 20px;
            color: #fff;
            border-radius: 2px 2px 0 0;
        }

        #details {
            background: #fff;
            border-left: solid 1px #ededed;
            border-right: solid 1px #ededed;
            font-size: 16px;
            font-family: 'Oxygen', sans-serif;
            padding: 15px 20px;
        }

        .detail-value {
            color: #455560;
        }

        #card-items {
            background: #ededed;
            font-family: 'Oxygen', sans-serif;
            padding: 20px
        }

        .card-item-title {
            font-size: 18px;
            font-weight: 700;
        }

        ul.checkmark li:before {
            color: #455560;
            content: "\2713\0020";
            font-weight: 600;
            margin-left: -38px;
            margin-right: 10px;
        }

        .checkmark li {
            list-style-type: none;
        }

        li {
            margin-bottom: 3px;
        }

        #method {
            background: #fff;
            border-left: solid 1px #ededed;
            border-right: solid 1px #ededed;
            border-bottom: solid 1px #ededed;
            padding: 20px;
        }

        #method li {
            list-style-position: inside;
            margin-bottom: 10px;
            margin-left: -38px;
            list-style-type: none;
        }

        /* #recipe-image {
                                                                                            overflow: hidden;
                                                                                            height: 450px;
                                                                                            width: 972px;
                                                                                            background-size: cover;
                                                                                        } */

        #recipe-image {
            max-width: 100%;
            height: auto;
            display: block;
            margin: auto;
        }


        ol {
            counter-reset: item;
        }

        ol>li {
            counter-increment: item;
        }

        ol>li::before {
            font-weight: bold;
            content: counter(item) ".";
            margin-right: 8px;
        }

        .intro-section {
            background: url({{ asset('frontend/img/Recipes.jpg') }});
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
                background: url({{ asset('frontend/img/Recipes_mob.jpg') }});
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
    <section class="default-section" id="recipesDetails">
        <div class="container-fluid">

            <div class="row pt-5">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>{{ trans('frontend.recipes_details') }}</h2>
                </div>
            </div>

            <div id="card-container">

                <div id="card-title">{{ $recipe->title }}</div>
                <div id="recipe-image">
                    <img src="{{ $recipe->image_url }}" style="max-width: 100%; height: auto; width:100%" alt="">

                </div>

                <div id="card-items">
                    <span class="card-item-title">Ingredients</span>
                    <ul class="checkmark">

                        @php
                            // Split the ingredients string into an array using a delimiter (e.g., newline)
                            $ingredients = explode("\n", $recipe->ingredients_en);
                        @endphp
                        @foreach ($ingredients as $ingredient)
                            {{-- Trim the ingredient to remove any leading/trailing whitespace --}}
                            @php
                                $ingredient = trim($ingredient);
                            @endphp
                            {{-- Check if the ingredient is not empty --}}
                            @if (!empty($ingredient))
                                <li>{{ $ingredient }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div id="method">
                    <span class="card-item-title">Preparation:</span>
                    <ol>
                        {!! $recipe->preparation_en !!}
                    </ol>

                </div>
            </div>
        </div>
    </section>
@endsection
