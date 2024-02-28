<style>
    .footer-widget__time__item p {
        font-size: 12px;
    }
</style>
<footer class="main-footer main-footer--one">
    <div class="main-footer__inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-xl-4">
                    <div class="footer-widget footer-widget--info">
                        <a href="/" class="footer-widget__logo">
                            <img src="{{ asset('assets/images/dna/logo.png') }}" width="130" alt="footer logo">
                        </a><!-- /.footer-widget__logo -->
                        <div class="footer-widget__text text-white">{!! \Illuminate\Support\Str::limit($aboutInfo['description'], 400) !!}</div>
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
                            <input type="email" name="EMAIL" placeholder="Email">
                            <button type="submit" class="laboix-btn laboix-btn--submite"><i class="icon-right-arrow"></i></button>
                        </form><!-- /.footer-widget__newsletter mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-2">
                    <div class="footer-widget footer-widget--link">
                        <h4 class="footer-widget__title">Links</h4>
                        <ul class="list-unstyled footer-widget__links">
                            <li class="footer-widget__links__item"><a href="about.html">About Us</a></li>
                            <li class="footer-widget__links__item"><a href="contact.html">FAQs </a></li>
                            <li class="footer-widget__links__item"><a href="services.html">Service</a></li>
                            <li class="footer-widget__links__item"><a href="blog-list.html">Latest News</a></li>
                            <li class="footer-widget__links__item"><a href="packages.html">Privacy Policy</a></li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--about">
                        <h4 class="footer-widget__title">Contact</h4>
                        <ul class="list-unstyled footer-widget__info">
                            <li class="footer-widget__info__item"> <span class="footer-widget__info__item__text">{{ $aboutInfo['address'] }}</span></li>
                            <li class="footer-widget__info__item"> <i class="icon-telephone-call-1" aria-hidden="true"></i> <a href="tel:{{ $aboutInfo['phone'] }}">{{ $aboutInfo['phone'] }}</a></li>
                            <li class="footer-widget__info__item"> <i class="icon-email" aria-hidden="true"></i> <a href="mailto:{{ $aboutInfo['email'] }}">{{ $aboutInfo['email'] }}</a></li>
                        </ul><!-- /.list-unstyled -->
                        <div class="footer-widget__social">
                            <a href="{{ $aboutInfo['facebook'] }}"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                            <a href="{{ $aboutInfo['twitter'] }}"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                            <a href="{{ $aboutInfo['linkedin'] }}"> <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="sr-only">LinkedIn</span></a>
                            <a href="{{ $aboutInfo['instagram'] }}"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                        </div><!-- /.footer-widget__social -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-6 col-xl-3">
                    <div class="footer-widget footer-widget--time">
                        <h4 class="footer-widget__title">Opening hours</h4>
                        <ul class="list-unstyled footer-widget__time">
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Sunday</p>
                                <p>{{ $aboutInfo['sunday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Monday</p>
                                <p>{{ $aboutInfo['monday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Tuesday</p>
                                <p>{{ $aboutInfo['tuesday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Wednesday</p>
                                <p>{{ $aboutInfo['wednesday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Thursday</p>
                                <p>{{ $aboutInfo['thursday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Friday</p>
                                <p>{{ $aboutInfo['friday_schedule'] }}</p>
                            </li>
                            <li class="footer-widget__time__item">
                                <p class="footer-widget__day"> <i class="icon-clock1"></i> Saturday</p>
                                <p>{{ $aboutInfo['saturday_schedule'] }}</p>
                            </li>
                        </ul><!-- /.list-unstyled footer-widget__links -->
                    </div><!-- /.footer-widget -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__middle -->

    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright"> &copy; Copyright <span class="dynamic-year"></span> DNA Learning Center Nigeria</p>
            </div><!-- /.main-footer__inner -->
        </div><!-- /.container -->
    </div><!-- /.main-footer__bottom -->
    <div class="main-footer__shape">
        <img src="assets/images/shapes/footer-shape-1-1.png" alt>
    </div>
    <div class="main-footer__shape main-footer__shape--two">
        <img src="assets/images/shapes/footer-shape-1-2.png" alt>
    </div>

</footer><!-- /.main-footer -->
