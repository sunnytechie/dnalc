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
                <div class="blog-details">
                    <div class="blog-card__two">
                        <div class="blog-card__two__image">
                            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                            <div class="blog-card__two__date"> <span class="blog-card__two__date__day">{{ $post->created_at->day }}</span>{{ $post->created_at->format('M') }}</div><!-- /.blog-card__two__date -->
                        </div><!-- /.blog-card__two__image -->
                        <div class="blog-card__two__content">
                            <ul class="list-unstyled blog-card__two__meta">
                                <li class="blog-card__two__meta__item"><a href="#"> <i class="icon-user"></i>By admin</a></li>
                                {{-- <li class="blog-card__two__meta__item"><a href="blog-details.html"> <i class="icon-chatting2"></i> 2 Comment</a></li> --}}
                            </ul><!-- /.list-unstyled blog-card__two__meta -->
                            {{-- <h3 class="blog-card__two__title blog-card__two__title--two"><a href="blog-details-right.html">Chemical plant for workplace safety topics </a></h3><!-- /.blog-card__two__title --> --}}

                            <p class="blog-card__two__text blog-card__two__text--two">{!! $post->content !!}</p>

                        </div><!-- /.blog-card-two__content -->
                    </div><!-- /.blog-card -->

                    {{-- <div class="blog-details__meta">
                        <div class="blog-details__tags wow fadeInUp" data-wow-delay='300ms'>
                            <h4 class="blog-details__tags__title">Post in: </h4><!-- /.blog-details__tags__title -->
                            <div class="sidebar__tags">
                                <button class="laboix-btn">Laboratory</button>
                                <button class="laboix-btn">Science</button>
                            </div><!-- /.sidebar__projects -->
                        </div><!-- /.blog-details__tags -->

                        <div class="blog-details__tags wow fadeInUp" data-wow-delay='500ms'>
                            <h4 class="blog-details__tags__title">Tags: </h4><!-- /.blog-details__tags__title -->
                            <div class="sidebar__tags2">
                                <a href="#">Safty</a> <span> , </span> <a href="#">Learning</a>
                            </div><!-- /.sidebar__projects -->
                        </div><!-- /.blog-details__tags -->
                    </div><!-- /.blog-details__meta --> --}}
                </div><!-- /.blog-details -->

                {{-- <div class="comments-one">
                    <h3 class="comments-one__title wow fadeInUp" data-wow-delay='300ms'>2 comments</h3><!-- /.comments-one__title -->
                    <ul class="list-unstyled comments-one__list">
                        <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-1.jpg" alt="">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">David shon</h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit. </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="blog-details-right.html" class="laboix-btn comments-one__card__reply">Reply</a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                        <li class="comments-one__card wow fadeInUp" data-wow-delay='300ms'>
                            <div class="comments-one__card__image">
                                <img src="assets/images/blog/blog-comment-1-2.jpg" alt="">
                            </div><!-- /.comments-one__card__image -->
                            <div class="comments-one__card__content">
                                <h3 class="comments-one__card__title">Jhon watchson</h3><!-- /.comments-one__card__title -->
                                <p class="comments-one__card__text">Nam vel lacus eu nisl bibendum accumsan vitae vitae nibh. Nam nec eros id magna hendrerit sagittis. Nullam sed mi non odio feugiat volutpat sit amet nec elit.
                                </p><!-- /.comments-one__card__text -->
                                <div class="comments-one__card__btn">
                                    <a href="blog-details-right.html" class="laboix-btn comments-one__card__reply">Reply</a>
                                </div><!-- /.comments-one__card__btn -->
                            </div><!-- /.comments-one__card__content -->
                        </li><!-- /.comments-one__card -->
                    </ul><!-- /.list-unstyled comments-one__list -->
                </div><!-- /.comments-one -->

                <div class="comments-form">
                    <h3 class="comments-form__title wow fadeInUp" data-wow-delay='300ms'>Add a review</h3><!-- /.comments-form__title -->
                    <form class="comments-form__form contact-form-validated form-one wow fadeInUp" data-wow-delay='300ms'>
                        <div class="form-one__group">
                            <div class="form-one__control">
                                <input type="text" name="name" placeholder="Your Name">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Email Address">
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="Write a Message"></textarea><!-- /# -->
                            </div><!-- /.form-one__control -->
                            <div class="form-one__control">
                                <button type="submit" class="laboix-btn laboix-btn--secondary">Submit a Review</button>
                            </div><!-- /.form-one__control -->
                        </div><!-- /.form-one__group -->
                    </form>
                    <div class="result"></div>
                </div><!-- /.comments-form --> --}}
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-one blog-one--page -->


@endsection
