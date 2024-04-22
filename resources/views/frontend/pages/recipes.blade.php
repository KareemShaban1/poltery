@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection

@php
    $bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Recipes BG')->first();
    $mob_bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Recipes Mob BG')->first();

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

            #schedule .nav-tabs {
                display: flex;
                flex-direction: column;
                margin: 10px
            }

            #schedule .nav-tabs a {
                margin: 10px
            }
        }

        img {
            vertical-align: text-bottom;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .ft-recipe {
            /* width: 460px; */
            width: 90%;
            height: 100%;
            background: var(--white);
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 88px 0 rgba(0, 0, 0, 0.1607843137);
            overflow: hidden;
            position: relative;
            /* top: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                right: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                bottom: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                left: 50%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                position: absolute; */
            /* transform: translate(-50%, -50%); */
        }

        .ft-recipe .ft-recipe__thumb {
            position: relative;
            height: 281px;
            box-shadow: 0px 0px 130px 0 rgba(0, 0, 0, 0.38);
        }

        .ft-recipe .ft-recipe__thumb #close-modal {
            position: absolute;
            top: 0;
            right: 0;
            width: 36px;
            height: 36px;
            background: #000;
            color: var(--white);
            text-align: center;
            line-height: 36px;
            font-size: 22px;
            cursor: pointer;
            z-index: 1;
            transition: all 200ms ease;
        }

        .ft-recipe .ft-recipe__thumb #close-modal:hover {
            background: transparent;
            color: var(--black);
        }

        .ft-recipe .ft-recipe__thumb h3 {
            text-align: center;
            position: absolute;
            margin: 0;
            width: 100%;
            color: var(--white);
            font-family: var(--headlinesFont);
            font-size: 25px;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25), transparent);
            padding: 2.4rem 0 0;
        }

        .ft-recipe .ft-recipe__thumb img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: 50% 50%;
            object-position: 50% 50%;
        }

        .ft-recipe .ft-recipe__content {
            flex: 1;
            padding: 0 2em 1em;
        }

        .ft-recipe .ft-recipe__content .content__header .row-wrapper {
            display: flex;
            padding: 0.55em 0 0.3em;
            border-bottom: 1px solid #d8d8d8;
        }

        .ft-recipe .ft-recipe__content .content__header .row-wrapper .recipe-title {
            /* font-family: var(--headlinesFont); */
            font-weight: 600;
            margin-top: 20px;
            font-size: 24px
        }

        .ft-recipe .ft-recipe__content .content__header .recipe-details {
            display: flex;
            list-style: none;
            padding: 1.4em 0 1em;
            margin: 0;
            justify-content: space-between;
        }

        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item {
            flex: 1;
        }

        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item i {
            font-size: 30px;
        }

        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item .value {
            color: #f82249;
            margin-left: 0.35em;
            vertical-align: bottom;
            font-size: 24px;
            font-weight: 600;
        }

        .ft-recipe .ft-recipe__content .content__header .recipe-details .recipe-details-item .title {
            display: block;
            margin-top: -4px;
            font-family: var(--headlinesFont);
            font-size: 21px;
            font-weight: 300;
        }

        .ft-recipe .ft-recipe__content .description {
            margin: 0.3em 0 1.8em;
        }

        .ft-recipe .ft-recipe__content .content__footer {
            text-align: center;
            margin: 0 3rem;
        }

        .ft-recipe .ft-recipe__content .content__footer a {
            display: inline-block;
            background: #f82249;
            padding: 0.45em 1em;
            width: 100%;
            text-align: center;
            border-radius: 5px;
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.2px;
            font-size: 17px;
            transition: transform 250ms ease, box-shadow 250ms ease;
        }

        .ft-recipe .ft-recipe__content .content__footer a:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 34px 0 rgba(255, 79, 135, 0.32);
        }
    </style>
@endpush

@section('content')
    @include('frontend.pages.pages_parts.page_desc')

    <section class="default-section" id="recipes">

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>{{ trans('frontend.recipes') }}</h2>
                </div>
            </div>

            <section id="schedule" class="section-with-bg">
                <div class="wow fadeInUp">


                    <ul class="nav nav-tabs" role="tablist">
                        @foreach ($recipeTypes as $type)
                            <li class="nav-item">
                                <a class="nav-link" href="#type-{{ $type->id }}" role="tab"
                                    data-toggle="tab">{{ $type->name }}</a>
                            </li>
                        @endforeach
                    </ul>


                    <div class="tab-content row justify-content-center">

                        @foreach ($recipeTypes as $type)
                            <div role="tabpanel"
                                class="col-lg-9 tab-pane {{ $type->id == 1 ? 'fade show active' : 'fade' }}"
                                id="type-{{ $type->id }}">


                                <div class="shell">

                                    <div class="container-fluid">
                                        <div class="row">
                                            @foreach ($type->recipes as $recipe)
                                                <div class="col-md-4 p-0"
                                                    style="display: flex;justify-content: center; margin-bottom: 20px">
                                                    <div class="ft-recipe">

                                                        <div class="ft-recipe__thumb">
                                                            {{-- <h3 style="font-family: 'Rubic';">
                                                                {{ $recipe->recipeType->name }}</h3> --}}
                                                                <img
                                                                src="{{ $recipe->image_url }}" alt="Strawberry Waffle" />
                                                        </div>
                                                        <div class="ft-recipe__content">
                                                            <header class="content__header">
                                                                <div class="row-wrapper">
                                                                    <h4 class="recipe-title">{{ $recipe->title }}</h4>
                                                                    <div class="user-rating"></div>
                                                                </div>

                                                            </header>
                                                            <p class="description">
                                                                {!! \Illuminate\Support\Str::words(strip_tags($recipe->description), 25, '...') !!}

                                                            </p>
                                                            <footer class="content__footer"><a
                                                                    href="{{ route('recipeDetails', $recipe->id) }}">{{ trans('frontend.View_Recipe') }}</a>
                                                            </footer>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>

            </section>


            {{-- <div class="shell">

                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($recipes as $recipe)
                                <div class="col-md-4 p-0"
                                    style="display: flex;
                                justify-content: center;
                                margin-bottom: 20px">
                                    <div class="ft-recipe">

                                        <div class="ft-recipe__thumb">
                                            <h3 style="font-family: 'Rubic';">{{ $recipe->recipeType->name }}</h3><img
                                                src="{{ $recipe->image_url }}" alt="Strawberry Waffle" />
                                        </div>
                                        <div class="ft-recipe__content">
                                            <header class="content__header">
                                                <div class="row-wrapper">
                                                    <h4 class="recipe-title">{{ $recipe->title }}</h4>
                                                    <div class="user-rating"></div>
                                                </div>

                                            </header>
                                            <p class="description">
                                                {!! \Illuminate\Support\Str::words(strip_tags($recipe->description), 25, '...') !!}

                                            </p>
                                            <footer class="content__footer"><a
                                                    href="{{ route('recipeDetails', $recipe->id) }}">View Recipe</a>
                                            </footer>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}


    </section>
@endsection
