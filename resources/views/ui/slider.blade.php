<!-- Slider Area Start -->
<div id="rs-slider" class="slider-section4 slider-overlay-2">
    <div id="home-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="1" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
        @foreach ($sliders as $slider)
        <!-- Item 1 -->
        <div class="item @if($loop->first) active @endif">
            <img style="height: 100vh; object-fit:cover" src="{{ asset('storage/' . $slider->flyer) }}" alt="Slider" />
            <div class="slide-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">WELCOME TO DNALC Science City</h1>
                            <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">{{ $slider->title }}</p>
                            {!! $slider->description !!}
                            <a href="{{ $slider->link }}" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">READ MORE</a>
                            <a href="{{ route('workshop') }}" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">GET STARTED NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <!-- Item 2 -->
        <div class="item">
            <img src="{{ asset('newassets/images/slider/home4/slide2.jpg') }}" alt="Slide2" />
            <div class="slide-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
                            <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>
                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
                            <a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="item">
            <img src="{{ asset('newassets/images/slider/home4/slide3.jpg') }}" alt="Slide3" />
            <div class="slide-content">
                <div class="display-table">
                    <div class="display-table-cell">
                        <div class="container">
                            <h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
                            <p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>
                            <a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
                            <a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</div>
<!-- Slider Area End -->
