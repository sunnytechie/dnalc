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

    .blog-card__two__meta__item:last-child::before {
        display: none;
    }
</style>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/dna/83.png') }})"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">{{ $pageTitle }}</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>{{ $pageLink }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="blog-one blog-one--page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-12">
                        <div class="blog-card__two  wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="blog-card__two__image">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                                <a href="{{ route('blog.post', $post->id) }}" class="blog-card__two__image__item"></a>
                                <div class="blog-card__two__date"> <span class="blog-card__two__date__day">{{ $post->created_at->day }}</span>{{ $post->created_at->format('M') }}</div><!-- /.blog-card__two__date -->
                            </div><!-- /.blog-card__two__image -->
                            <div class="blog-card__two__content">
                                <ul class="list-unstyled blog-card__two__meta">
                                    <li class="blog-card__two__meta__item"><a href="{{ route('blog.post', $post->id) }}"> <i class="icon-user"></i>By admin</a></li>
                                    {{-- <li class="blog-card__two__meta__item"><a href="blog-details.html"> <i class="icon-chatting2"></i> 2 Comment</a></li> --}}
                                </ul><!-- /.list-unstyled blog-card__two__meta -->
                                <h3 class="blog-card__two__title"><a href="{{ route('blog.post', $post->id) }}">{{ $post->title }}</a></h3><!-- /.blog-card__two__title -->
                                <p class="blog-card__two__text">{!! Str::limit($post->content, '100') !!}</p><!-- /.blog-card__two-two__text -->
                                <a href="{{ route('blog.post', $post->id) }}" class="blog-card__two__link laboix-btn laboix-btn--submite"><i class="icon-arrow"></i></a><!-- /.blog-card__two__link -->
                            </div><!-- /.blog-card-two__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-md-12 -->
                    @endforeach

                    <div class="col-12">
                        <div class="pronation_widget wow fadeInUp" data-wow-delay="300ms">
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>

                </div><!-- /.row -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->


@endsection
