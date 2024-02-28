@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">DNA Learning center Admin dashboard.</p>

            <div class="btn-group">
                <a href="/" target="_blank" class="btn btn-primary rounded-0">Home Page</a>

                <form class="m-0 p-0" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn rounded-0 btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                </form>
            </div>
        </div><!-- login-info -->


        <div class="row">
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('slider.index') }}">Home Slider</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('sponsor.index') }}">Sponsors</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('about.index') }}">About Us</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('team.index') }}">Leaders/Teams</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('post.index') }}">Blog Post/Articles</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('faq.index') }}">FAQs</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('webinar.index') }}">Webinar</a></div>
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="{{ route('dnaresource.index') }}">Resources</a></div>
            {{-- <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="#">Testimonials</a></div> --}}
            <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="#">Subscribers</a></div>
            {{-- <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="#">Why Choose Us</a></div> --}}
            {{-- <div class="col-md-3 mb-4"><a class="btn-lg btn w-100 btn-primary rounded-0" href="#">Others</a></div> --}}
        </div>


    </div>
@endsection
