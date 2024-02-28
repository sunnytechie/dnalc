<!-- Contact Section start -->
<section class="contact-two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-two__left wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms">
                    <div class="contact-two__content">
                        <div class="contact-two__content__top">
                            <span class="contact-two__content__top__subtitle">Contact us</span>
                            <h6 class="contact-two__content__top__title">Let’s work together</h6>
                        </div>
                        <ul class="contact-two__content__list list-unstyled">
                            <li class="contact-two__content__list__item">
                                <div class="contact-two__content__icon">
                                    <i class="icon-telephone-call-1"></i>
                                </div>
                                <div class="contact-two__content__inner">
                                    <span class="contact-two__content__title">Have Question?</span>
                                    <h4 class="contact-two__content__text"><a href="tel:{{ $aboutInfo['phone'] }}">Free {{ $aboutInfo['phone'] }}</a></h4>
                                </div>
                            </li>
                            <li class="contact-two__content__list__item">
                                <div class="contact-two__content__icon">
                                    <i class="icon-email1"></i>
                                </div>
                                <div class="contact-two__content__inner">
                                    <span class="contact-two__content__title">Have Question?</span>
                                    <h4 class="contact-two__content__text"><a href="mailto:{{ $aboutInfo['email'] }}">{{ $aboutInfo['email'] }}</a></h4>
                                </div>
                            </li>
                            <li class="contact-two__content__list__item">
                                <div class="contact-two__content__icon">
                                    <i class="icon-pin"></i>
                                </div>
                                <div class="contact-two__content__inner">
                                    <span class="contact-two__content__title">Want to locate us?</span>
                                    <h4 class="contact-two__content__text">{{ $aboutInfo['address'] }}</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-two__right wow fadeInUp" data-wow-duration="700ms" data-wow-delay="700ms">
                    <div class="sec-title sec-title--two text-start wow fadeInUp" data-wow-duration='1500ms'>
                        <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-2.png" alt="Contact With Us" class="sec-title__img">Contact With Us</h6><!-- /.sec-title__tagline -->
                        <h3 class="sec-title__title">Feel free to write us</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <form class="form-one wow fadeInUp" data-wow-duration="1500ms" action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="form-one__group">
                            <div class="form-one__control form-one__control--full">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control--full">
                                <input type="email" name="email" placeholder="Email address">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control--full">
                                <input type="text" name="subject" placeholder="Subject">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write a Message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="laboix-btn laboix-btn--submite">Send a Message</button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-two__map">
        <div class="google-map google-map__contact">
            <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1708960069936!2d7.5871622738058!3d6.500037593492152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a521416ba1fd%3A0xa6dca55a79ae2abf!2sDNA%20Learning%20Center%20Nigeria!5e0!3m2!1sen!2sng!4v1708176860780!5m2!1sen!2sng" class="map__@@extraClassName" allowfullscreen></iframe>
            <div class="google-map__contact__pin">
                <img src="assets/images/shapes/pin-1-2.png" alt="laboix icon">
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
