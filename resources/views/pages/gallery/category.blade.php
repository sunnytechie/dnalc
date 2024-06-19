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


<section class="gallery-one gallery-one--page">
    <div class="container">

        <div class="row masonry-layout filter-layout">
            @foreach ($categories as $category)
                <div class="col-md-6 col-lg-4">
                    <a href="{{ route('gallery', $category->id) }}">
                        <div class="gallery-one__card">
                            <img style="width: 100%; height: 250px; object-fit: cover" src="{{ url('storage' . '/gallerycover/' . $category->image) }}" alt="{{ $category->title }}">
                        </div><!-- /.gallery-one__card -->
                    </a>
                </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</section><!-- /.gallery-one -->


@endsection
