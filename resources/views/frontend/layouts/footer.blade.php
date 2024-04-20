  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">
                  @php
                      if (App::getLocale() == 'en') {
                          $website_info = App\Models\WebsiteInfo::where('language', 'english')->pluck('value', 'key');
                      } else {
                          $website_info = App\Models\WebsiteInfo::where('language', 'arabic')->pluck('value', 'key');
                      }
                  @endphp
                  <div class="col-lg-5 col-md-5 footer-info"
                      style="display: flex; flex-direction: column; align-items: center;">
                      <h3 style="font-family: 'Rubic'">{!! $website_info['Company_Name'] ?? '' !!}</h3>
                      {{-- <p style="font-size:18px; font-family: 'Rubic'">El Abed Meat & Poultry Co.
                      </p> --}}
                      <img class="logo-image" src="{{ asset('frontend/img/logo_1.png') }}" alt="" title="">
                  </div>


                  <div class="col-lg-6 col-md-6 footer-contact"
                      style="display: flex;
                  flex-direction: column;
                  align-items: center;">
                      <h4 style="font-size:22px; font-family: 'Rubic'">{{ trans('frontend.Contact_Us') }}</h4>
                      <div class="d-flex">
                          <strong>{{ trans('frontend.Address') }}  : </strong>
                          <div style="direction: ltr">
                              {!! $website_info['Address'] ?? '' !!}
                          </div>
                      </div>
                      <div class="d-flex">
                          <strong>{{ trans('frontend.Phone') }}  : </strong>
                          <div style="direction: ltr">
                              {!! $website_info['Phone'] ?? '' !!}
                          </div>
                      </div>
                      <div class="d-flex">
                          <strong>{{ trans('frontend.Email') }}  : </strong>
                          <div style="direction: ltr">
                              {!! $website_info['Email'] ?? '' !!}
                          </div>
                      </div>


                      <div class="social-links">

                          <a @if (!empty($website_info['facebook_link'])) href="{{ $website_info['facebook_link'] }}" @endif
                              class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a @if (!empty($website_info['instagram_link'])) href="{{ $website_info['instagram_link'] }}" @endif
                              class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                          <a @if (!empty($website_info['youtube_link'])) href="{{ $website_info['youtube_link'] }}" @endif
                              class="youtube" target="_blank"><i class="fa fa-youtube"></i></a>

                      </div>

                  </div>

                  {{-- <div class="col-lg-5 col-md-4 footer-info">

                      <iframe allowtransparency="true" frameborder="0" scrolling="no" title="elabed_poultry_map"
                          style="width: 100%; height: 250px; margin-top: 20px; margin-bottom: 20px;"
                          src="//www.weebly.com/weebly/apps/generateMap.php?map=google&elementid=369949245161704105&ineditor=0&control=3&width=auto&height=250px&overviewmap=0&scalecontrol=0&typecontrol=0&zoom=16&long=31.2476834&lat=30.0650099&domain=www&point=1&align=1&reseller=false"></iframe>
                  </div> --}}
              </div>
          </div>
      </div>

      <div class="container">
          <div class="copyright">
              All Copyright Reserved &copy; <strong> Magic Stick Agency </strong>
              {{-- &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved --}}
          </div>
          {{-- <div class="credits">

              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div> --}}
      </div>
  </footer><!-- #footer -->
