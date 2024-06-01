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

<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-two__left">
                    <div class="about-two__thumb">

                        <div class="about-two__thumb__item">
                            <img style="width: 100%;" src="{{ asset('assets/images/dna/dnalc_ng_cert.png') }}" alt="DNALC">
                        </div>

                        <div style="background: #0C4960; padding: 20px; width: 100%;">
                            <div class="text-white">Founded - 2019</div>
                            <div class="text-white">DNA Learning Center, Nigeria</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">The DNA Learning Center, Nigeria
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">The DNA Learning Center Nigeria (DNALC Nigeria) received its license from the parent organization (DNALC CSHL, New York) to operate as the first Center in Africa</p>

                        <div>
                            <h4>Our Mission</h4>
                            <p class="about-text">The Mission of DNA Learning Center Nigeria is to train the next generation of biological scientists who are equipped to solve African medical, agricultural and environmental challenges by providing learning opportunities through adequate hands-on laboratory and inquiry based instruction to students, instructors, families and the public. The overall goal is to build a skilled work force and infrastructure that will enable our society to thrive in the gene age.
                            </p>
                        </div>

                        <div>
                            <h4>Our Mission</h4>
                            <p class="about-text">To be a reference point of excellence in scientific training, capacity building and research.</p>
                        </div>
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
