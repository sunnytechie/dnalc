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
            <div class="col-md-6">
                <div class="about-two__left">
                    <img width="100%" src="{{ asset('storage/' . $workshop->flyer) }}" alt="{{ $workshop->title }}">
                </div>
            </div>


            <div class="col-md-6">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">Workshop</h6><!-- /.sec-title__tagline -->
                            <h5 class="sec-title__title" style="font-size: 18px">Application: {{ $workshop->title }}
                            </h5><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">{{ $workshop->venue }}</p>
                        <div class="mb-4">{{ \Carbon\Carbon::parse($workshop->start_date)->format('j M Y') }} to {{ \Carbon\Carbon::parse($workshop->end_date)->format('j M Y') }}</div>

                        <div class="card">
                            <form class="login-page__form" action="{{ route('workshop.application.store', $workshop->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="login-page__form-input-box col-md-12">
                                        <input
                                        type="text"
                                        name="fullname"
                                        value="{{ old('fullname') }}"
                                        required
                                        autofocus
                                        autocomplete="fullname"
                                        placeholder="Your fullname Name*">

                                        @if ($errors->has('fullname'))
                                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="login-page__form-input-box col-md-6">
                                        <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
                                        autocomplete="email"
                                        placeholder="Your email address*">

                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="login-page__form-input-box col-md-6">
                                        <input
                                        type="tel"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        required
                                        autofocus
                                        autocomplete="phone"
                                        placeholder="Your Mobile Number*">

                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="login-page__form-input-box col-md-6">
                                        <select class="form-control" name="country" id="country">
                                            <option disabled selected>Country</option>
                                            <option>Nigeria</option>
                                            <option>Others</option>
                                        </select>

                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>

                                    <div class="login-page__form-input-box col-md-6">
                                        <input
                                        type="text"
                                        name="institution"
                                        value="{{ old('institution') }}"
                                        autofocus
                                        autocomplete="institution"
                                        placeholder="Institution or Affiliate*">

                                        @if ($errors->has('institution'))
                                            <span class="text-danger">{{ $errors->first('institution') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="login-page__form-input-box col-md-6">
                                        <select class="form-control" name="scholarship" id="scholarship">
                                            <option disabled selected>Choose Scholarship</option>
                                            <option>Full Scholarship</option>
                                            <option>Partial Scholarship</option>
                                        </select>

                                        @if ($errors->has('scholarship'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>

                                    <div class="login-page__form-input-box col-md-6">
                                        <select class="form-control" name="info_source" id="info_source">
                                            <option disabled selected>How did you hear about us?</option>
                                            <option>Through our flyer</option>
                                            <option>Oline search engine</option>
                                            <option>Social media</option>
                                            <option>Word of mouth</option>
                                            <option>Others</option>
                                        </select>

                                        @if ($errors->has('info_source'))
                                            <span class="text-danger">{{ $errors->first('info_source') }}</span>
                                        @endif
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="login-page__form-input-box col-md-12">
                                        <input
                                        type="text"
                                        name="referral"
                                        value="{{ old('referral') }}"
                                        autofocus
                                        autocomplete="referral"
                                        placeholder="Referral Fullname">

                                        @if ($errors->has('referral'))
                                            <span class="text-danger">{{ $errors->first('referral') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-md btn-primary">Submit application</button>
                                    </div>
                                </div>
                                
                            </form>
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
