@extends('layouts.app')
@section('content')
<style>
    .page-header {
        padding-top: 140px;
        padding-bottom: 100px;
        text-align: left !important;
        background-size: cover;
        background-position: center;
    }
</style>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(https://cdn.pixabay.com/photo/2017/02/01/13/53/analysis-2030265_1280.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">{{ $pageTitle }}</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>{{ $pageLink }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__left">
                    <div class="about-two__thumb">

                        <div class="about-two__thumb__item">
                            <img style="width: 100%;" src="{{ asset('storage/' . $about->thumbnail) }}" alt="DNALC">
                        </div>

                        <div style="background: #0C4960; padding: 20px; width: 100%;">
                            <div class="text-white">Founded - 1890</div>
                            <div class="text-white">Cold Spring Harbor Laboratory</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">{{ $about->title }}</h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-two__top__text">{!! $about->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-two__shape">
        <img src="{{ asset('assets/images/shapes/about-shape-2-1.png') }}" alt>
    </div>
</section>


@endsection
