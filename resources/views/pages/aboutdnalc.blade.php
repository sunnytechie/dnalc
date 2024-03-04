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
                            <div class="text-white">Founded - 2019</div>
                            <div class="text-white">Godfrey Okoye University, Enugu                            </div>
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
                        <p class="about-text">The DNA Learning Center Nigeria (DNALC Nigeria) is a alliance between three institutions that have collaborated in various ways since 2011 to enhance bioscience education in Nigeria. The DNA Learning Center at CSHL, New York and Bowie State University, Maryland, in partnership with Godfrey Okoye University, are saddled with the task of enhancing the capacity of Nigerian high schools and universities to build student interest in science by promoting inquiry-based learning and hands-on laboratory experiences.
                        </p>
                        <p class="about-text">The overarching goal of the Center is capacity building that prepares teachers, students and families to benefit from modern genomics and biotechnology innovations in agricultural and medical research. DNALC Nigeria will additionally contribute to poverty and disease alleviation in Nigeria by preparing a new generation of highly skilled scientists and workforce to support agricultural and medical advancement.
                        </p>
                        <p class="about-text">
                            Sited in the permanent site of Godfrey Okoye University, Enugu - this area is peaceful, has a conducive atmosphere for learning with beautiful natural scenery that is only available in the southeastern region. The DNA Learning Center Nigeria (DNALC Nigeria) is poised to be a leading institution in molecular biology research and top-notch laboratory experience in Nigeria. The aim is to bridge the wide gap in hands-on research training that Is needed to develop scientific inquiry in Nigeria.
                        </p>

                        <div id="mission">
                            <h4>Our Mission</h4>
                        <p class="about-text">The Mission of DNA Learning Center Nigeria is to train the next generation of biological scientists who are equipped to solve African medical, agricultural and environmental challenges by providing learning opportunities through adequate hands-on laboratory and inquiry based instruction to students, instructors, families and the public. The overall goal is to build a skilled work force and infrastructure that will enable our society to thrive in the gene age.
                        </p>
                        </div>

                        <div id="vision">
                            <h4>Our Vision</h4>
                        <p class="about-text">To be a reference point of excellence in scientific training, capacity building and research.
                        </p>
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
