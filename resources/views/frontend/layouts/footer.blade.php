  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-3 col-md-4 footer-info"
                      style="display: flex;
                  flex-direction: column;
                  align-items: center;">
                      <h3>ElAbed Poultry</h3>
                      <p>El Abed Meat & Poultry Co.
                      </p>
                      <img class="logo-image" src="{{ asset('frontend/img/logo.png') }}" alt="" title="">
                  </div>

                  <div class="col-lg-5 col-md-4 footer-info">

                      <iframe allowtransparency="true" frameborder="0" scrolling="no" title="elabed_poultry_map"
                          style="width: 100%; height: 250px; margin-top: 20px; margin-bottom: 20px;"
                          src="//www.weebly.com/weebly/apps/generateMap.php?map=google&elementid=369949245161704105&ineditor=0&control=3&width=auto&height=250px&overviewmap=0&scalecontrol=0&typecontrol=0&zoom=16&long=31.2476834&lat=30.0650099&domain=www&point=1&align=1&reseller=false"></iframe>


                  </div>





                  @php
                      $website_info = App\Models\WebsiteInfo::pluck('value', 'key');

                  @endphp
                  <div class="col-lg-4 col-md-4 footer-contact"
                      style="display: flex;
                  flex-direction: column;
                  align-items: center;">
                      <h4>Contact Us</h4>
                      <p>
                          <strong>Address:</strong> 28 Ahmed Helmy Street, Shobra, Cairo, Egypt 11231 <br>
                          <strong>Phone:</strong> +2 015 222 222 50<br>
                          <strong>Email:</strong> info@elabedfarms.com<br>
                      </p>


                      <div class="social-links">

                          <a @if (!empty($website_info['facebook_link'])) href="{{ $website_info['facebook_link'] }}" @endif
                              class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                          <a @if (!empty($website_info['instgram_link'])) href="{{ $website_info['instgram_link'] }}" @endif
                              class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                          <a @if (!empty($website_info['youtube_link'])) href="{{ $website_info['youtube_link'] }}" @endif
                              class="youtube" target="_blank"><i class="fa fa-youtube"></i></a>

                      </div>

                  </div>

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
