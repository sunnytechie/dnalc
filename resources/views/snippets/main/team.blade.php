<!-- Team section Start -->
<section class="team-one team-one--home remove-on-mobile" style="padding: 120px 50px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Our Specialist" class="sec-title__img">Our Leaders</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">Meet Our Our Project <br> Led by Erudite Scholars</h3><!-- /.sec-title__title -->
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
                "autoplay": true,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 3,
                        "margin": 30
                    },
                    "992": {
                        "items": 5,
                        "margin": 30
                    }
                }
            }'>
            @foreach ($teams as $team)

            <div class="item">
                <div class="team-card"'>
                    <div class="team-card__inner">
                        <div class="team-card__image">
                            <img style="width: 100%; height: 250px; object-fit: cover;" src="{{ asset('storage/' . $team->thumbnail) }}" alt="{{ $team->name }}">
                        </div>
                        <div class="team-card__content">
                            <div class="team-card__content__inner">
                                <div class="team-card__content__item">
                                    <h3 class="team-card__content__title"><a href="{{ route('team.details', $team->id) }}">{{ $team->name }}</a></h3><!-- /.team-card__title -->
                                    <h6 class="team-card__content__designation">{{ $team->title }}</h6><!-- /.team-card__designation -->
                                </div>
                                <div class="team-card__content__hover">
                                    <div class="team-card__content__hover__icon">
                                        <i class="icon-shear"></i>
                                    </div><!-- /.team-card__content__hover__icon -->
                                    <div class="team-card__content__hover__social">
                                        <a href="{{ $team->twitter }}"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                                        <a href="{{ $team->facebook }}"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                                        <a href="{{ $team->linkedin }}"> <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="sr-only">LinkedIn</span></a>
                                        <a href="{{ $team->instagram }}"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                                    </div><!-- /.team-card__social__list -->
                                </div><!-- /.team-card__content__hover -->
                            </div>
                        </div><!-- /.team-card__content -->
                    </div><!-- /.team-card__content -->
                </div><!-- /.team-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- Team section End -->
