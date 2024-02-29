<!-- About Two section start -->
<style>
    .img-resize {
        width: 570px !important;
        height: 531px !important;
        object-fit: cover !important;
    }

    .img2-resize {
        width: 470px !important;
        height: 385px !important;
        object-fit: cover !important;
    }

    @media (max-width: 768px) {
        .img-resize {
            width: 100% !important;
            height: auto !important;
        }

        .img2-resize {
            width: 100% !important;
            height: auto !important;
        }
    }

    @media (max-width: 576px) {
        .img-resize {
            display: none !important;
        }

        .img2-resize {
            display: none !important;
        }
    }
</style>
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__left wow fadeInLeft" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="about-two__thumb">
                        <div class="about-two__thumb__item">
                            <img src="{{ asset('storage/' . $about->thumbnail) }}" alt="dnalc" class="img-resize">
                        </div>
                        <div class="about-two__thumb__item about-two__thumb__item--two">
                            <img src="{{ asset('storage/' . $about->thumbnail_2) }}" alt="dnalc" class="img2_resize">
                            <div class="about-two__items">
                                <div class="about-two__box">
                                    <div class="about-two__box__icon">
                                        <i class="icon-chatting"></i>
                                    </div>
                                    <div class="about-two__box__content">
                                        <span class="about-two__box__subtitle">Call to anytime</span>
                                        <a href="tel:{{ $aboutInfo['phone'] }}" class="about-two__box__text">{{ $aboutInfo['phone'] }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h4 class="sec-title__title">{{ \Illuminate\Support\Str::limit($aboutInfo['title'], 50) }}</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="about-two__top__text">{!! \Illuminate\Support\Str::limit($aboutInfo['description'], 500) !!}</div>
                    </div>

                    <div class="about-two__feature wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="about-two__feature__item">
                            <div class="about-two__feature__icon">
                                <i class="icon-blood-test-1"></i>
                            </div>
                            <h4 class="about-two__feature__title"><a href="services.html">{{ $about->heading_1 }}</a></h4>
                            <div class="about-two__feature__text">{!! \Illuminate\Support\Str::limit($about->content_1, 300) !!}</div>
                        </div>
                        <div class="about-two__feature__item">
                            <div class="about-two__feature__icon">
                                <i class="icon-accuracy-1"></i>
                            </div>
                            <h4 class="about-two__feature__title"><a href="services.html">{{ $about->heading_2 }}</a></h4>
                            <div class="about-two__feature__text">{!! \Illuminate\Support\Str::limit($about->heading_2_content, 300) !!}</div>
                        </div>
                    </div>
                    {{-- <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem ipsum </li>
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem</li>
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Expert many variations teacher </li>
                    </ul> --}}
                    <div class="about-two__link">
                        <a href="about.html" class="about-two__link__btn dnalc-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-two__shape">
        <img src="assets/images/shapes/about-shape-2-1.png" alt>
    </div>
    <div class="about-two__shape--two">
        <img src="assets/images/shapes/about-shape-1-1.png" alt>
    </div>
</section>
<!-- About Two section End -->
