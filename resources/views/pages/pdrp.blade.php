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
            <div class="col-md-3">
                <div class="about-two__left">

                    <div class="about-two__thumb in-page-link">
                        <a href="{{ route('sssinternship') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'sssinternship') active @endif">Senior Secondary School Internship</a>
                        <a href="{{ route('drde') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'drde') active @endif">Doctoral Research Designs & Experiments</a>
                        <a href="{{ route('pdrp') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'pdrp') active @endif">Post Doctoral Research Prospects</a>
                        <a href="{{ route('urex') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'urex') active @endif">Undergraduate Research Experience (UREx)</a>
                        <a href="{{ route('postgraduate') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'postgraduate') active @endif">Post Graduate Research Opportunities</a>
                    </div>

                </div>
            </div>


            <div class="col-md-9">
                <div class="about-two__right">
                    <div class="about-two__top">
                        {{-- <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="trainings" class="sec-title__img">Trainings</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Our Signature Programs
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">We plan and run five advanced bio-science workshops through the year for students and faculty from different tertiary and educational institutions plus other organizations in Nigeria. We host – World of DNA, DNA Science, Genome Science, DNA Barcoding of the Nigerian flora and fauna; and DNA Metabarcoding.</p>
                        <p class="about-text">In addition to this, we also host workshops, conferences and seminars for public audience for awareness and science education.</p> --}}
                        <div>
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{ asset('assets/images/dna/06.jpg') }}" alt="">
                        </div>
                        <h5 class="mt-4">Post Doctoral Research Prospects
                        </h5>
                        <p class="about-text">In addition to the use of DNALC facilities for doctoral level research and mentorship, we offer bench spaces, mini-libraries and lockers to researchers working towards their post doctorates or just conducting research as a post doctorate student or a senior researcher. For reservations and enquiries, write to “the Assistant Director, Training
                        </p>



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
