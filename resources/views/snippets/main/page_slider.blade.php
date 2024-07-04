<!-- main-slider-start -->
        <section class="main-slider-three">
            <div class="main-slider-three__carousel laboix-owl__carousel owl-carousel" data-owl-options='{
            		"loop": true,
            		"animateOut": "fadeOut",
            		"animateIn": "fadeIn",
            		"items": 1,
            		"autoplay": true,
            		"autoplayTimeout": 7000,
            		"smartSpeed": 1000,
            		"nav": false,
            		"dots": true,
            		"margin": 0
            	    }'>

                    @foreach ($sliders as $slider)
                        <div class="item">
                            <div class="main-slider-three__item">
                                <div class="main-slider-three__bg" style="background-image: url({{ asset('storage/' . $slider->thumbnail) }}); background-size: contain;"></div>
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="main-slider-three__content">
                                                <h2 class="main-slider-three__title">{{ $slider->title }}</h2>

                                                <div class="main-slider-three__btn">
                                                    <a href="{{ $slider->link }}" class="laboix-btn">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-slider-three__shape">
                                    <img src="assets/images/shapes/hero-shape-4-1.png" alt>
                                </div>
                                <div class="main-slider-three__shape__two main-slider-three__shape__two--one">
                                    <img src="assets/images/shapes/hero-shape-4-2.png" alt>
                                </div>
                                <div class="main-slider-three__shape__two main-slider-three__shape__two--two">
                                    <img src="assets/images/shapes/hero-shape-4-3.png" alt>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </section>
        <!-- main-slider-end -->
