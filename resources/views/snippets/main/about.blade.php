<!-- About Two section start -->
<style>
    .img-resize {
        width: 570px !important;
        height: 531px !important;
        object-fit: cover !important;
    }

    .img2_resize {
        width: 420px !important;
        height: 325px !important;
        object-fit: cover !important;
    }

    @media (max-width: 768px) {
        .img-resize {
            width: 100% !important;
            height: auto !important;
        }

        .img2_resize {
            display: none !important;
        }
    }

    @media (max-width: 576px) {
        .img-resize {
            display: none !important;
        }

        .img2_resize {
            display: none !important;
        }
    }

    .dnalc-btn {
        background-color: #0EBD66 !important;
        color: #FFFFFF !important;
        padding: 20px 30px;
    }

    .dnalc-btn:hover {
        background-color: #0C4960 !important;
        color: #FFFFFF !important;
    }

    .client-carousel-one .client-carousel__one__item img {
        opacity: 1;
    }
</style>
<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 remove-on-599">
                <div class="about-two__left">
                    <div>
                        <div class="client-carousel client-carousel-one about-us">
                            <div class="container">
                                <div class="client-carousel__one laboix-owl__carousel owl-theme owl-carousel" data-owl-options='{
                            {{-- Update item number if you add more --}}
                            "items": 2,
                            "margin": 55,
                            "smartSpeed": 700,
                            "loop":true,
                            "autoplay": 6000,
                            "nav":false,
                            "dots":false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 1,
                                    "margin": 30
                                },
                                "992": {
                                    "items": 2,
                                    "margin": 30
                                }
                            }
                            }'>

                                <div class="client-carousel__one__item">
                                    <img class="img-resize" src="{{ asset('storage/' . $about->thumbnail) }}" alt="About us">
                                </div>

                                <div class="client-carousel__one__item">
                                    <img class="img-resize" src="{{ asset('storage/' . $about->thumbnail_2) }}" alt="About us">
                                </div>

                                </div>
                            </div>
                        </div>

                            {{-- <img src="{{ asset('storage/' . $about->thumbnail) }}" alt="dnalc" class="img-resize"> --}}
                        {{-- <div class="about-two__thumb__item about-two__thumb__item--two">
                            <img src="{{ asset('storage/' . $about->thumbnail_2) }}" alt="dnalc" class="img2_resize">
                            <div class="about-two__items">
                                <div class="about-two__box">

                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>










            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='100ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h5 class="sec-title__title" style="font-size: 20px">{{ $aboutInfo['title'] }}</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <div class="about-two__top__text">{!! \Illuminate\Support\Str::limit($aboutInfo['description'], 2000) !!}</div>
                    </div>

                    <div class="about-two__feature wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <div class="about-two__feature__item">
                            <div class="about-two__feature__icon">
                                <i class="icon-blood-test-1"></i>
                            </div>
                            <h4 class="about-two__feature__title">{{ $about->heading_1 }}</h4>
                            <div class="about-two__feature__text">{!! \Illuminate\Support\Str::limit($about->content_1, 1000) !!}</div>
                        </div>
                        <div class="about-two__feature__item">
                            <div class="about-two__feature__icon">
                                <i class="icon-accuracy-1"></i>
                            </div>
                            <h4 class="about-two__feature__title">{{ $about->heading_2 }}</h4>
                            <div class="about-two__feature__text">{!! \Illuminate\Support\Str::limit($about->heading_2_content, 1000) !!}</div>
                        </div>
                    </div>
                    <p>{!! \Illuminate\Support\Str::limit($about->content, 3000) !!}</p>
                    {{-- <ul class="about-two__list list-unstyled wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem ipsum </li>
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Many variations of passages of lorem</li>
                        <li class="about-two__list__item"><i class="fas fa-check-circle"></i> Expert many variations teacher </li>
                    </ul> --}}
                    <div class="about-two__link">
                        <a href="{{ route('aboutdnalc') }}" class="about-two__link__btn dnalc-btn">Discover More</a>
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
