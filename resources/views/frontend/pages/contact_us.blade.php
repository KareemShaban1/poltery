@extends('frontend.layouts.master')

@section('content')
    <section id="intro"
        style="background: url({{ asset('frontend/img/Contact_Us.jpg') }}); background-size:cover; background-attachment: fixed">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">ElAbed <span>Poultry</span></h1>
            <p class="mb-4 pb-0">FROM OUR FARMS TO YOUR TABLE - THE BEST QUALITY YOU CAN FIND</p>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
                data-autoplay="true"></a> --}}
            {{-- <a href="#about" class="about-btn scrollto"></a> --}}
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
                                <h3>{{ trans('frontend.Address') }}</h3>
                                <address>28 Ahmed Helmy Street, Shobra, Cairo, Egypt 11231</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>{{ trans('frontend.Phone') }}</h3>
                                <p><a href="tel:+201522222250">+2 015 222 222 50</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>{{ trans('frontend.Email') }}</h3>
                                <p><a href="mailto:info@elabedfarms.com">info@elabedfarms.com</a></p>
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
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="{{ trans('frontend.Subject') }}" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
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
