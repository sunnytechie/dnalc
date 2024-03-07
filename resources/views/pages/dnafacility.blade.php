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

<section class="py-5 my-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6"><img style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('assets/images/dna/03.jpg') }}" alt=""></div>
            <div class="col-md-6">
                <h4>College & High School Activities At DNALC Nigeria
                </h4>
                <p class="about-text">DNALC Nigeria aims to enhance undergraduate intake into the Biological Science programs in Nigeria by extending the DNALC experience to Secondary school and tertiary level students to encourage scientific affection into their curricula. This will enable students to solve real life problems in regular laboratory classes using modern molecular biology research tools without having to go to a major laboratory for an internship experience.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Laboratory (School) Field Trips
                </h4>
                <p class="about-text">We offer specialized laboratory field trips for all secondary school classes from junior to senior grades. These include hands-on experiments, independent research, interactive computer experiences, the museum exhibition featuring historical figures, and multimedia presentations in the auditorium. The trips are tailored to ensure that the students have a lot of fun and memorable moments while ensuring that scientific lessons are taught along the way.
                </p>
                <ul>
                    <li>Tertiary Institutions</li>
                    <li>Primary/Basic School</li>
                    <li>Secondary School</li>
                </ul>
            </div>
            <div class="col-md-6"><img style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('assets/images/dna/02.jpg') }}" alt=""></div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6"><img style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('assets/images/dna/07.jpg') }}" alt=""></div>
            <div class="col-md-6">
                <h4>Saturday DNA! Classes
                </h4>
                <p class="about-text">Saturday DNA! classes make use of DNALC resources to provide fun learning experiences for the public. This is open to people of all ages and backgrounds who are enthusiastic about learning how science works.
                </p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h4>Science Educators Training
                </h4>
                <p class="about-text">We offer up-to-date teacher training through biology workshops and development for teachers in genetics and biotechnology. With federal and private foundation funding, we offer these free workshops to secondary school and university educators, especially those in the areas of genetics, biology, chemistry, genomics, and bioinformatics. These Educator Training Workshops and Fellowships for secondary schools and tertiary level faculty are held at DNALC sites and at host institutions throughout the country.
                </p>
            </div>
            <div class="col-md-6"><img style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('assets/images/dna/11.jpg') }}" alt=""></div>
        </div>

        <div class="row mb-5">
            <div class="col-md-6"><img style="width: 100%; height: 400px; object-fit: cover;" src="{{ asset('assets/images/dna/01.jpg') }}" alt=""></div>
            <div class="col-md-6">
                <h4>Special Agricultural Biotechnology Research Course At DNALC Nigeria
                </h4>
                <p class="about-text">We have introduced a one-week Agricultural Biotechnology course to prepare graduate students and university faculty to utilize modern genetic technology to improve crop yield, disease resistance, and nutritional quality. This course will be available to students at GOU and to graduate students from other Universities in Nigeria who are pursuing Masters or Doctorate degrees in Agriculture or related fields.
                </p>
            </div>
        </div>
    </div>
</section>


@endsection
