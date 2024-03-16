  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">

                  <div class="col-lg-4 col-md-4 footer-info">
                      {{-- <img src="img/logo.png" alt="TheEvenet"> --}}
                      <h3>ElAbed Poultry</h3>
                      <p>El Abed Meat & Poultry Co.
                      </p>
                  </div>





                  @php
                      $website_info = App\Models\WebsiteInfo::pluck('value', 'key');

                  @endphp
                  <div class="col-lg-4 col-md-4 footer-contact">
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
          {{-- <div class="copyright">
              &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
          </div>
          <div class="credits">

              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div> --}}
      </div>
  </footer><!-- #footer -->
