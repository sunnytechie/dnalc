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
                            <div class="text-white">Founded - 1988</div>
                            <div class="text-white">The Dolan DNA Learning Center</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">DNALC New York, USA
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text"> The Dolan DNA Learning Center (DNALC) is the world's first science center devoted entirely to public genetics education and is an operating unit of Cold Spring Harbor Laboratory, an important center for molecular genetics research. The DNALC extends the Laboratory's traditional research and postgraduate education mission to the college, precollege, and public levels. It is also the world’s largest provider of student lab instruction in molecular genetics, operating teaching laboratories throughout Long Island and Manhattan and more recently opened in China and Mexico. More than 280,000 precollege students have conducted hands-on experiments at the DNALC since its inception in 1988; an additional 145,000 have received intensive lab instruction from DNALC staff at their schools. Its multi-disciplinary staff has experience in elementary, secondary, and collegiate instruction; biochemistry and molecular biological research; design, photography, and fine arts; science journalism; public relations and development; and opinion research.
                        </p>
                        <p class="about-text"> More than 20,000 middle and high school students have attended our week-long camps. A survey of summer campers indicates that the experience improves their confidence and encourages them to take more science classes. The workshops specifically support girls' science aspirations by increasing their success with hands-on work. For many, the DNALC influenced their decision to pursue science as a college major or as a career. In addition, over 10,000 precollege and college faculty have received intensive training at DNALC-sponsored workshops conducted in 48 states and 15 foreign countries.
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
