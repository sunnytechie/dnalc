<!-- main-slider-start -->
{{-- <style>
    .main-slider-two__image__item {
        mask: none;
        -webkit-mask: none;
    }
</style> --}}
<section class="main-slider-two">
    <div class="main-slider-two__carousel laboix-owl__carousel owl-carousel" data-owl-options='{
    "loop": true,
    "animateOut": "fadeOut",
    "animateIn": "fadeIn",
    "items": 1,
    "autoplay": true,
    "autoplayTimeout": 7000,
    "smartSpeed": 1000,
    "nav": true,
    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-arrow\"></span>"],
    "dots": true,
    "margin": 0
    }'>
        <!-- item -->
        @foreach ($sliders as $slider)
            <div class="item">
                <div class="main-slider-two__item">
                    <div class="main-slider-two__bg" style="background-image: url({{ asset('storage/' . $slider->thumbnail) }});"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="main-slider-two__content">
                                    <h2 class="main-slider-two__title pt-4">{{ $slider->title }}</h2>
                                    <ul class="main-slider-two__list list-unstyled">
                                        <div class="text-white">
                                            {!! $slider->description !!}
                                        </div>
                                    </ul>
                                    <div class="main-slider-two__btn">
                                        <a target="_blank" href="{{ $slider->link }}" class="laboix-btn">Get Started</a>
                                    </div>
                                </div>
                            </div>
                                            {{-- 590 x 692 --}}
                            <div class="col-lg-6 remove-on-765">
                                <div class="main-slider-two__image">
                                    <div class="main-slider-two__image__item">

                                        <img src="{{ asset('storage/' . $slider->flyer) }}" alt="laboix hero image">
                                    </div>

                                    <div class="main-slider-two__image__item-shape">
                                        <img src="assets/images/shapes/hero-2-2.png" alt="laboix hero image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="main-slider-two__item__shape">
                        <img src="assets/images/shapes/hero-2-1.png" alt>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
<!-- main-slider-end -->
