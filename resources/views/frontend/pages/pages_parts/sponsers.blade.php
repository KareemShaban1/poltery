  <!--==========================
      Sponsors Section
    ============================-->
  @php
      $sponsors = App\Models\Sponsor::all();
  @endphp
  <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
          <div class="section-header">
              <h2>{{ trans('frontend.Our_Partners') }}</h2>
          </div>

          <div class="row no-gutters supporters-wrap clearfix">

              @foreach ($sponsors as $sponsor)
                  <div class="col-lg-3 col-md-4 col-xs-6">
                      <div class="supporter-logo">
                          <img src="{{ $sponsor->image_url }}" class="img-fluid" alt="">
                      </div>
                  </div>
              @endforeach




          </div>

      </div>

  </section>
