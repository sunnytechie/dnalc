@extends('layouts.app')
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
                            <div class="text-white">DNALC Nigeria</div>
                            <div class="text-white">Field Trips</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Quality & Novelty of Programs
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">The overall aim of the project is to build the capacity of Nigerian high schools and universities to increase the interest of students in science through inquiry-based learning and hands-on laboratory opportunities. To achieve our goal we propose the following specific objectives:
                        </p>
                        <ol type="1">
                            <li>Train high school teachers and STEM faculty in inquiry-based teaching strategies that equips them for high impact on students through enhanced laboratory teaching practices in the courses that they teach.
                            </li>
                            <li>Serve as a strategic science development and diplomacy platform in Nigeria for the betterment of all Nigerian nations and the people of United States.
                            </li>
                            <li>Provide Course-Based Undergraduate Research (CURE) projects for approximately 250 GOU students taking biotechnology and microbiology courses.
                            </li>

                        </ol>
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
