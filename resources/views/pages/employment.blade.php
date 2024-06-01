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
            <div class="col-md-4">
                <div class="about-two__left">

                    <div class="about-two__thumb in-page-link">
                        <a class="mb-3 w-100 btn staff-btn" href="#">Administrative Level Opportunities</a>
                        <a class="mb-3 w-100 btn staff-btn" href="#">Research Opportunities Available</a>
                        <a class="mb-3 w-100 btn staff-btn" href="#">General Staff Opportunities Available</a>
                        <a class="mb-3 w-100 btn staff-btn" href="#">Internship Opportunities Available</a>

                        <p class="about-tex">
                            DNALC Nigeria: STAFF APPLICATION FORM
                        </p>
                        <a style="background: #27CD3A; color: #ffffff; padding: 10px 40px; border-radius: 0px;" class="btn btn-default btn-md" download href="{{ asset('assets/images/dna/Staff-Employment-Application-form.pdf') }}">Download</a>
                    </div>

                </div>
            </div>


            <div class="col-md-8">
                <div class="about-two__right">
                    <div class="about-two__top">
                         <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="trainings" class="sec-title__img">Trainings</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">We are hiring
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->

                        <p class="about-tex">DNALC NIGERIA ADMINISTRATIVE OFFICER
                        </p>

                        <div>
                            <img style="width: 100%; object-fit: cover;" src="{{ asset('assets/images/dna/ADVERT.jpg') }}" alt="">
                        </div>
                        <h5 class="mt-4 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
                                <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                            </svg>
                            <span style="margin-left: 8px">August 1st 2022</span>
                        </h5>
                        <p class="about-text">The DNA Learning Center Nigeria (DNALC Nigeria) is seeking a full-time Administrative Officer for the center located at the Ugwuomu Campus of Godfrey Okoye University, Enugu. The Center is a choice destination for various science education programs - school field trips, summer camps, training sessions, workshops, and programs for the general public.
                        </p>
                        <p class="about-text">The Administrative Manager will oversee all office operations and administrative tasks from greeting the public to maintaining financial and visitation records, and providing general administrative support for the whole organization.
                        </p>

                        <ul>
                            <li>Answering phones, meeting and greeting teachers, students, and visitors</li>
                            <li>Overseeing building maintenance</li>
                            <li>Maintaining and purchasing office supplies</li>
                            <li>Assisting with special projects including mailings, marketing, proofreading, and editing</li>
                            <li>Maintaining a master calendar, schedules, attendance lists, and follow-ups for programs</li>
                            <li>Booking school reservations and invoicing</li>
                            <li>Data collection and entry, with periodic visitation reports</li>
                            <li>Financial management, including income, payments, budgets, and periodic financial reports</li>
                            <li>The ideal candidate will have a Bachelor’s degree or equivalent experience, be proficient in Word, Excel, and Outlook, have a minimum of five years of customer service or office experience, and must feel comfortable working in a lively environment with lots of social interaction. Strong organizational and personal skills and the ability to multi-task are required.</li>
                            <li>Probation/Training: 2 weeks at our Ugwuomu DNA Learning Center Nigeria office. For more information about DNALC Nigeria, please browse our website at dnalcnigeria.org</li>
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
