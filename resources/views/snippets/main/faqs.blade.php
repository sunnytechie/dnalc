<!-- FAQ section Start -->
<section class="faq-two">
    <div class="faq-two__bg jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% -100%" style="background-image: url({{ asset('assets/images/dna/question-mark-1872665_1280.jpg') }});"></div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <div class="faq-two__left">
                    <div class="faq-two__top">
                        <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="FAQS" class="sec-title__img">FAQS</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Have questions in your mind? get the answers now</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div>
                    <div class="faq-two__inner">
                        <div class="faq-page__accordion laboix-accrodion" data-grp-name="laboix-accrodion">
                            @foreach ($faqs as $faq)
                            <div class="accrodion @if ($loop->first)
                                active
                            @endif">
                                <div class="accrodion-title">
                                    <h4 class="accrodion-title__text">{{ $faq->question }}<span class="accrodion-title__icon"></span></h4>
                                </div><!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p class="inner__text">{!! $faq->answer !!}</p>
                                    </div><!-- /.accordian-content -->
                                </div>
                            </div><!-- /.accordian-item -->
                            @endforeach
                        </div>

                        <div class="mt-3">
                            <a class="btn border-0 rounded-0 btn-success" href="{{ route('faq') }}">See more...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-two__right">
                    <div class="faq-two__image">
                        <img src="{{ asset('assets/images/dna/dnalc_group_pics_burlesque.jpg') }}" alt="laboix image">
                    </div>
                    <div class="faq-two__funfact">
                        <div class="faq-two__funfact__icon">
                            <img src="assets/images/shapes/icon-1-1.png" alt="icon">
                        </div>
                        <h4 class="faq-two__funfact__count count-box">
                            <span class="count-text" data-stop="500" data-speed="1500"></span>
                            <span>k+</span>
                        </h4>
                        <p class="faq-two__funfact__text">Satisfied Students </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ section End -->
