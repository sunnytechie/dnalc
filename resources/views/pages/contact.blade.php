@extends('layouts.app')
<title>{{ $pageTitle }}</title>
@section('content')
<style>
    .page-header {
        padding-top: 140px;
        padding-bottom: 100px;
        text-align: center;
        background-size: cover;
        background-position: center;
    }
</style>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/dna/85.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">{{ $pageTitle }}</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>{{ $pageLink }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-one__content">
                    <ul class="list-unstyled contact-one__info">
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-telephone-call-1"></i>
                            </div>
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Have any question?</p>
                                <h4 class="contact-one__info__title"><a href="tel:{{ $aboutInfo['phone'] }}">Call {{ $aboutInfo['phone'] }}</a></h4><!-- /.contact-one__info__title -->
                            </div><!-- /.contact-one__info__content -->
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Send email</p>
                                <h4 class="contact-one__info__title"><a href="mailto:{{ $aboutInfo['email'] }}">{{ $aboutInfo['email'] }}</a></h4>
                            </div>
                        </li>
                        <li class="contact-one__info__item">
                            <div class="contact-one__info__icon">
                                <i class="icon-pin"></i>
                            </div><!-- /.contact-one__info__icon -->
                            <div class="contact-one__info__content">
                                <p class="contact-one__info__text">Visit anytime</p> <!-- /.contact-one__info__text -->
                                <h4 class="contact-one__info__title"><a href="#">{{ $aboutInfo['address'] }}</a></h4><!-- /.contact-one__info__title -->
                            </div><!-- /.contact-one__info__content -->
                        </li>
                    </ul><!-- /.list-unstyled -->

                    <div class="contact-one__content__thumb">
                        <img src="assets/images/resources/man-contact.png" alt="laboix">
                    </div><!-- /.contact-one__content__thumb -->
                    <div class="contact-one__content__social">
                        <a href="{{ $aboutInfo['instagram'] }}"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
                        <a href="{{ $aboutInfo['facebook'] }}"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
                        <a href="{{ $aboutInfo['twitter'] }}"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
                        <a href="{{ $aboutInfo['linkedin'] }}"> <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="sr-only">LinkedIn</span></a>
                    </div>
                </div><!-- /.contact-one__content -->
            </div><!-- /.col-xl-7 -->

            <div class="col-lg-7">
                <div class="contact-one__left">
                    <div class="contact-one__top">
                        <div class="sec-title wow fadeInUp" data-wow-duration='700ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="Contact with  Us" class="sec-title__img">Contact with Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Feel free to write us anytime</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                    </div><!-- /.contact-one__top -->
                    <form class="contact-one__form form-one background-base wow fadeInUp" data-wow-duration="1500ms" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your name">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email address">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control">
                                <input type="tel" name="phone" placeholder="Phone" required="">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control">
                                <input type="text" name="subject" placeholder="Subject">
                            </div><!-- /.form-one__control form-one__control__full -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write a message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="laboix-btn laboix-btn--submite">Send a message</button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                </div>
            </div><!-- /.col-xl-5 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-one -->

@endsection
