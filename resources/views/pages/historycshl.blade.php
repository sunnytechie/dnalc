@extends('layouts.app')
<title>{{ $pageTitle }}</title>
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
                            <img style="width: 100%;" src="{{ asset('assets/images/dna/cshl.png') }}" alt="DNALC">
                        </div>

                        <div style="background: #0C4960; padding: 20px; width: 100%;">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ffffff" class="bi bi-globe-americas" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-white">Founded - 1890</div>
                                    <div class="text-white">Cold Spring Harbor Laboratory</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h4 class="sec-title__title" style="font-size: 20px">History of Cold Spring Harbor Laboratory - DNALC</h4><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-two__top__text">The Dolan DNA Learning Center (DNALC) is the world's first science center devoted entirely to public genetics education and is an operating unit of Cold Spring Harbor Laboratory, an important center for molecular genetics research.</p>
                        <p>The DNALC as the educational of arm CSHL extends the Laboratory's traditional research and postgraduate education mission to the college, precollege, and public levels. It is also the world's largest provider of student lab instruction in molecular genetics, operating teaching laboratories throughout Long Island and Manhattan and more recently opened in China and Mexico.</p>
                        <p>More than 280,000 precollege students have conducted hands-on experiments at the DNALC since its inception in 1988; an additional 145,000 have received intensive lab instruction from DNALC staff at their schools. Its multi-disciplinary staff has experience in elementary, secondary, and collegiate instruction; biochemistry and molecular biological research; design, photography, and fine arts; science journalism; public relations and development; and opinion research.</p>
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
