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


<section class="gallery-one gallery-one--page">
    <div class="container">
        <div class="text-center">
            <ul class="list-unstyled post-filter gallery-one__filter__list">
                <li class="active" data-filter=".filter-item"><span>All</span></li>
                <li data-filter=".workship"><span>Workshop</span></li>
                <li data-filter=".summercamp"><span>Summer Camps</span></li>
                <li data-filter=".scienceoutreach"><span>Science Outreach</span></li>
                <li data-filter=".fieldtrip"><span>Field Trips</span></li>
                <li data-filter=".dnaclasses"><span>DNA Classes</span></li>
            </ul><!-- /.list-unstyledf -->
        </div><!-- /.text-center -->

        <div class="row masonry-layout filter-layout">
            @foreach ($galleries as $gallery)
                <div class="col-md-6 col-lg-4 filter-item {{ $gallery->category }}">
                    <div class="gallery-one__card">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="laboix">
                        <div class="gallery-one__card__hover">
                            <a href="{{ asset('storage/' . $gallery->image) }}" class="img-popup">
                                <div class="gallery-one__card__icon">
                                    <span class="gallery-one__card__icon__item"></span>
                                </div>
                            </a>
                        </div><!-- /.gallery-one__card__hover -->
                    </div><!-- /.gallery-one__card -->
                </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.gallery-one -->


@endsection
