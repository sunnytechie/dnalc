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
                            <div class="text-white">Founded - 2006</div>
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
                            <h3 class="sec-title__title">The Host Institution
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">The idea of establishing a Catholic University by the Catholic Diocese of Enugu was first presented by the Bishop of Enugu (Emeritus), Most Rev. Dr. A. O. Gbuji, to all priests of the diocese. He wanted a university with the name “Cor Unum”, a university that could represent the unity of all educational activities of the diocese. In spite of the effort of the bishop to the project take off immediately, it did not. The bishop later discussed his plan with Rev. Fr. Prof. Christian Anieke whom he appointed the provost of the Institute of Ecumenical Education in February 2006. Rev. Fr. Prof. Anieke understood the importance of a university project for the diocese and took the bull by the horn. He assured the bishop that he would use all the resources he had to ensure that he built a university for the diocese.
                        </p>
                        <p class="about-text">Godfrey Okoye University (GO University) was then founded in 2009 by the Very Reverend Father Professor Dr. Christian Anieke for the Catholic Diocese of Enugu. The university, which received its operational license on 3 November 2009 from the National Universities Commission (NUC), belongs to the Catholic Diocese of Enugu in Nigeria. It is the first university owned by a Catholic Diocese in Africa. In 2009 the university started with 215 students and admitted 1,200 students by the end of 2012.; and On 1 December 2013, GOU commenced a week-long programme of activities to celebrate its maiden convocation. 100 students were awarded bachelor's degrees during the final ceremony on 7 December 2013.
                        </p>

                        <div id="mission">
                            <h4>Our Mission</h4>
                        <p class="about-text">Godfrey Okoye University dedicates itself to impart quality education aimed at inculcating in students strong personality that will ensure the promotion of religious, cultural and epistemological dialogue.
                        </p>
                        </div>

                        <div id="vision">
                            <h4>Our Vision</h4>
                        <p class="about-text">The vision of Godfrey Okoye University is to produce graduates who would be outstanding in learning, balanced in character, personality and ready to pursue epistemic unity in all its ramification.
                        </p>
                        </div>

                        <div id="philosophy">
                            <h4>Our Philosophy</h4>
                        <p class="about-text">The philosophy of Godfrey Okoye University is based on the nature of human being as a social being and a dialogue seeking being. From this point of view the university understands education as a dialogical process of acquisition and dissemination of knowledge.
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
