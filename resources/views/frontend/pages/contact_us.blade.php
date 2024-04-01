@extends('frontend.layouts.master')

@section('seo_data')
    @include('frontend.layouts.default_seo_data')
@endsection
@php
    $bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Contact BG')->first();
    $mob_bg_image = App\Models\Image::where('type', 'main_image')->where('title', 'Contact Mob BG')->first();

@endphp
@push('styles')
    <style>
        .intro-section {
            background: url({{ $bg_image->image_url }});
            background-attachment: fixed;
            width: 100%;
            height: 800px;
            /* background-size: contain; */
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        .form-control {
            border-width: 2px;
            background-color: #f0f0f0;
        }

        /* Media query for smaller devices */
        @media (max-width: 768px) {
            .intro-section {
                background: url({{ $mob_bg_image->image_url }});
                background-size: cover;
                background-attachment: fixed;
                background-position-y: 70px;
                /* Adjust other styles as needed for smaller devices */
            }
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


    <section id="contact" class="default-section section-bg wow fadeInUp">

        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12 text-center service-heading animate-box section-header">
                    <h2>{{ trans('frontend.Contact_Us') }}</h2>
                </div>
            </div>


            <div class="row">

                <div class="col-md-12">

                    <div class="row contact-info">

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3 style="font-family: 'Rubic';">{{ trans('frontend.Address') }}</h3>
                                <address style="font-family: 'Rubic';">28 Ahmed Helmy Street, Shobra, Cairo, Egypt 11231
                                </address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3 style="font-family: 'Rubic';">{{ trans('frontend.Phone') }}</h3>
                                <p style="font-family: 'Rubic';"><a href="tel:+201522222250">+2 015 222 222 50</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3 style="font-family: 'Rubic';">{{ trans('frontend.Email') }}</h3>
                                <p style="font-family: 'Rubic';"><a
                                        href="mailto:info@elabedfarms.com">info@elabedfarms.com</a></p>
                            </div>
                        </div>

                    </div>

                    <div>
                        <iframe allowtransparency="true" frameborder="0" scrolling="no" title="elabed_poultry_map"
                            style="width: 100%; height: 350px; margin-top: 20px; margin-bottom: 20px;"
                            src="//www.weebly.com/weebly/apps/generateMap.php?map=google&elementid=369949245161704105&ineditor=0&control=3&width=auto&height=250px&overviewmap=0&scalecontrol=0&typecontrol=0&zoom=16&long=31.2476834&lat=30.0650099&domain=www&point=1&align=1&reseller=false"></iframe>

                    </div>
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ trans('frontend.Name') }}" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{ trans('frontend.Email') }}" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="number" id="number"
                                    placeholder="{{ trans('frontend.Number') }}" data-rule="minlen:11"
                                    data-msg="Please enter your number" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="{{ trans('frontend.Message') }}"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">{{ trans('frontend.Send_Message') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
