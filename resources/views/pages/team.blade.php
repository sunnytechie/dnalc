@extends('layouts.app')
<title>DNA | {{ $team->name }}</title>
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

<section class="team-details">
    <div class="container">
        <div class="team-details__inner">
            <div class="row">
                <div class="col-md-5">
                    <div class="team-details__image">
                        <img style="width: 500px; height: 676px; object-fit:contain" src="{{ asset('storage/' . $team->thumbnail) }}" alt="team-details__image">
                    </div><!-- /.team-details__image -->
                </div><!-- /.col-lg-6 -->

                <div class="col-md-7">
                    <div class="team-details__content">
                        <h6 class="team-details__content__subtitle">{{ $team->title }}</h6>
                        <h3 class="team-details__content__title">Hello, i’m {{ $team->name }}</h3><!-- /.team-details__title -->
                        <p class="team-details__content__text">{!! $team->about !!}</p><!-- /.team-details__content__text -->
                        <!-- /.team-details__designation -->
                        <div class="team-details__content__highlight">
                            <span class="team-details__content__highlight__text">{{ $team->quote }}</span>
                        </div><!-- /.team-details__content__highlight -->
                        <ul class="list-unstyled team-details__list">
                            <li class="team-details__list__item"><span class="team-details__list__item__name">Experience:</span> {{ $team->experience }} Years</li>
                            <li class="team-details__list__item"><span class="team-details__list__item__name"> Email:</span> <a href="mailto:{{ $team->email }}">{{ $team->email }}</a></li>
                            <li class="team-details__list__item"><span class="team-details__list__item__name">Phone:</span> <a href="tel:{{ $team->phone }}"> {{ $team->phone }}</a></li>
                        </ul><!-- /.list-unstyled team-details__list -->

                        <div class="team-skills">
                            <div class="team-skills__progress">
                                <h4 class="team-skills__progress__title">Expertise</h4>
                                <div class="team-skills__progress__bar">
                                    <div class="team-skills__progress__inner count-bar" data-percent="{{ rand(80, 100) }}%">
                                        <div class="team-skills__progress__number count-text">{{ rand(80, 100) }}%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                            <div class="team-skills__progress">
                                <h4 class="team-skills__progress__title">Experience</h4>
                                <div class="team-skills__progress__bar">
                                    <div class="team-skills__progress__inner count-bar" data-percent="{{ rand(80, 100) }}%">
                                        <div class="team-skills__progress__number count-text">{{ rand(80, 100) }}%</div>
                                    </div>
                                </div>
                            </div><!-- /.skills-item -->
                        </div><!-- /team-skills-one -->

                        <div class="team-details__social">
                            <a href="{{ $team->facebook }}"><i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span></a>
                            <a href="{{ $team->twitter }}"><i class="fab fa-twitter" aria-hidden="true"></i><span class="sr-only">Twitter</span></a>
                            <a href="{{ $team->linkedin }}"><i class="fab fa-linkedin" aria-hidden="true"></i> <span class="sr-only">LinkedIn</span></a>
                            <a href="{{ $team->instagram }}"><i class="fab fa-youtube" aria-hidden="true"></i> <span class="sr-only">Youtube</span></a>
                        </div><!-- /.team-details__social -->

                    </div><!-- /.team-details__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.team-details__inner -->
    </div><!-- /.container -->
</section><!-- /.team-details -->

@endsection
