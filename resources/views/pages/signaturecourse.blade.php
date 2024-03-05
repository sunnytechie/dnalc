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

    .staff-btn {
        background-color: #27CD3A;
        color: #FFFFFF;
        border: none;
        padding: 10px 20px;
        text-align: left;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
        border-radius: 0px;
    }

    .staff-btn:hover {
        background-color: #0C4960;
        color: #FFFFFF;
    }

    .info-card-bg {
        background-color: #031b4e;
        color: #FFFFFF;
        padding: 30px 20px;
        margin-top: 20px;
    }

    .in-page-link .active {
        background-color: #0C4960;
        color: #FFFFFF;
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
            <div class="col-md-3">
                <div class="about-two__left">

                    <div class="about-two__thumb in-page-link">
                        <a href="{{ route('worlddna') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'worlddna') active @endif">DNA World</a>
                        <a href="{{ route('dnascience') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'dnascience') active @endif">DNA Science</a>
                        <a href="{{ route('genomescience') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'genomescience') active @endif">Genome Science</a>
                        <a href="{{ route('dnabarcoding') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'dnabarcoding') active @endif">DNA Barcoding</a>
                        <a href="{{ route('dnametabarcoding') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'dnametabarcoding') active @endif">DNA Metabarcoding</a>
                    </div>

                </div>
            </div>


            <div class="col-md-9">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="trainings" class="sec-title__img">Trainings</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Our Signature Programs
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">We plan and run five advanced bio-science workshops through the year for students and faculty from different tertiary and educational institutions plus other organizations in Nigeria. We host – World of DNA, DNA Science, Genome Science, DNA Barcoding of the Nigerian flora and fauna; and DNA Metabarcoding.</p>
                        <p class="about-text">In addition to this, we also host workshops, conferences and seminars for public audience for awareness and science education.</p>
                        <div>
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{ asset('assets/images/dna/03.jpg') }}" alt="">
                        </div>
                        <h5 class="mt-4">DNA World</h5>
                        <p class="about-text">This is an introductory course for anyone seeking to begin a journey into the world of Molecular Biology. This is a very important course that lays the foundation for all other courses. It provides extensive lab experience with the basic techniques of working with DNA, RNA and Proteins in a Molecular Biology laboratory.
                        </p>
                        <p class="about-text">This equips the student with theoretical and working knowledge of various tools and platorms used in modern research. The expected skill sets to be acquired include the practical knowledge on:
                        </p>

                        <ul>
                            <li>Isolation of Nucleic acids from various material</li>
                            <li>Polymerase Chain Reaction</li>
                            <li>Gel Electrophoresis</li>
                            <li>Analysis of gel results</li>
                        </ul>

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
