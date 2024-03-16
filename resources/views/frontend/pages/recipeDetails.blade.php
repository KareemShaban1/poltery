@extends('frontend.layouts.master')

@push('styles')
    <style>
        #card-container {
            background: #ededed;
            box-shadow: 0px 0px 200px #999;
            font-family: 'Oxygen', sans-serif;
            width: 65%;
            /* height: 385px; */
            margin: 5% auto;
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

        #recipe-image {
            /* background: url('https://images.unsplash.com/photo-1497534547324-0ebb3f052e88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1290&q=80'); */
            overflow: hidden;
            height: 450px;
            background-size: cover;
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
    </style>
@endpush

@section('content')
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a> --}}
            {{-- <a href="#about" class="about-btn scrollto"></a> --}}
        </div>
    </section>
    <section>
        <div class="container-fluid">

            <div class="row pt-5">
                <div class="col-md-12 text-center service-heading animate-box">
                    <h2>{{ trans('frontend.recipes_details') }}</h2>
                </div>
            </div>

            <div id="card-container">
                <div id="card-title">{{ $recipe->title }}</div>
                <div id="recipe-image">
                    <img src="{{ $recipe->image_url }}" alt="">
                </div>
                {{-- <div id="details">Prep time: <span class="detail-value">10 minutes</span> | Cook time: <span
                        class="detail-value">55 minutes</span> | Yield: <span class="detail-value">Makes one loaf</span>
                </div> --}}
                <div id="card-items">
                    <span class="card-item-title">Ingredients</span>
                    <ul class="checkmark">
                        {{-- {!! $recipe->ingredients_en !!} --}}
                        {{-- <li>2 to 3 very ripe bananas, peeled</li>
                        <li>1/3 cup melted butter</li>
                        <li>1 teaspoon baking soda</li>
                        <li>Pinch of salt</li>
                        <li>3/4 cup sugar (1/2 cup if you would like it less sweet, 1 cup if more sweet)</li>
                        <li>1 large egg, beaten</li>
                        <li>1 teaspoon vanilla extract</li>
                        <li>1 1/2 cups of all-purpose flour</li> --}}
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
                    {{-- <li>Preheat the oven to 350°F (175°C), and butter a 4x8-inch loaf pan.</li>
                        <li>In a mixing bowl, mash the ripe bananas with a fork until completely smooth. Stir the melted
                            butter into the mashed bananas.</li>
                        <li>Mix in the baking soda and salt. Stir in the sugar, beaten egg, and vanilla extract. Mix in the
                            flour.</li>
                        <li>Pour the batter into your prepared loaf pan. Bake for 50 minutes to 1 hour at 350°F (175°C), or
                            until a tester inserted into the center comes out clean.</li>
                        <li>Remove from oven and let cool in the pan for a few minutes. Then remove the banana bread from
                            the pan and let cool completely before serving. Slice and serve. (A bread knife helps to make
                            slices that aren't crumbly.)</li>
                        </ul> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
