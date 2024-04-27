<!-- service-page section Start -->
<section class="service-page service-page--one">
    <div class="service-page__bg" style="background-image: url(assets/images/shapes/service-shape-1-1.png);"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="our Service" class="sec-title__img">DNALC - WEBINARS</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">Attend our trainings <br> live from your couch!</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
        </div>
        <div class="row gutter-y-30">

                <div class="service-page__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow laboix-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                              "items": 1,
                              "margin": 0,
                              "loop": true,
                              "smartSpeed": 700,
                              "nav": false,
                              "dots": true,
                              "autoplay": false,
                              "responsive": {
                                  "0": {
                                      "items": 1
                                  },
                                  "768": {
                                      "items": 2,
                                      "margin": 30
                                  },
                                  "992": {
                                      "items": 3,
                                      "margin": 30
                                  }
                              }
                          }'>

                    @foreach ($webinars as $webinar)
                    <div class="item">
                        <div class="service-card">
                            <div class="service-card__inner">
                                <div class="service-card__top">
                                    <h3 class="service-card__title"><a href="{{ $webinar->link }}">{{ $webinar->title }}</a></h3>
                                    <div class="service-card__icon">
                                        <i class="icon-artificial-intelligence-2"></i>
                                    </div>
                                </div>
                                <div class="service-card__thumb">
                                    <div class="service-card-thumb-item">
                                        <img src="{{ asset('storage/' . $webinar->thumbnail) }}" alt="{{ $webinar->id }} <br> {{ $webinar->id }}">
                                    </div>
                                    <div class="service-card__thumb__shape">
                                        <img src="assets/images/shapes/shape-service.png" alt>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.item -->
                    @endforeach

                </div><!-- /.row -->

        </div><!-- /.row -->
    </div>
</section>
<!-- service-page section End -->

