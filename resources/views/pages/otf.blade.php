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
                            <img style="width: 100%;" src="{{ asset('assets/images/dna/future.png') }}" alt="DNALC">
                        </div>

                        <div style="background: #0C4960; padding: 20px; width: 100%;">
                            <div class="text-white">The Proposed DNALC Science City At The Permanent Site</div>
                            <div class="text-white">DNALC Nigeria Science City</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">Owning The Future
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">A State-of-the-Art DNA Learning Center Nigeria, to be completed in 2025. To establish this project, GOU has given an in-kind donation of 2.5 hectares of land (18,240 square feet) at its permanent site in Ugwuomu Nike, Enugu for the establishment of a State-of-the-Art DNA Learning Center to be known as 'DNALC Nigeria Science City.' The architectural drawings for complex are currently being prepared; other permits are being sought and will be ready for construction to start as soon as an award is received in 2023. We expect that the site will become operational in 2024 and that DNALC Nigeria will reach full capacity by 2025.
                        </p>
                        <p class="about-text">At full operation in 2025, we anticipate our yearly objectives and outcomes to be as follows:
                        </p>
                        <ol type="1">
                            <li>Provide academic year lab field trips for 5,000 students involving undergrads and high school students and summer camps for 500 high school students.
                            </li>
                            <li>Train 100 teachers and provide equipment footlockers to support 50 in-school student labs.
                            </li>
                            <li>Support a network of 100 students and mentors involved in distributed research projects in DNA barcoding of tropical species, and microbiomes.
                            </li>
                            <li>
                                Provide Course-Based Undergraduate Research (CURE) projects for approximately 250 GOU students taking biotechnology and microbiology courses.
                            </li>
                            <li>
                                Persuade public and private school administrators to come up with non-discriminatory scholarships to fund 50% of their high school student lab field trip tuitions to the Center; make under represented minorities (ethnic groups) and disadvantaged students at least half of total student visitation.
                            </li>
                            <li>
                                Provide weekend learning activities and family events for 400 visitors.
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
