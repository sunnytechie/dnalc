<!-- Blog-one section Start -->

<section class="blog-one" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline"><img src="assets/images/shapes/sec-title-s-1.png" alt="Article" class="sec-title__img">OUR NEWS & BLOG</h6><!-- /.sec-title__tagline -->
                    <h5 class="sec-title__title">Read & get educated on our current happenings here at DNALC Nigeria.</h5><!-- /.sec-title__title -->
                    {{-- <p>Read & get educated on our current happenings here at DNALC Nigeria.</p> --}}
                </div><!-- /.sec-title -->
            </div>
        </div>
        <div class="row gutter-y-30">
            <div class="service-page__carousel laboix-owl__carousel laboix-owl__carousel--with-shadow laboix-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "dots": true,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 3,
                        "margin": 30
                    },
                    "992": {
                        "items": 4,
                        "margin": 30
                    }
                }
            }'>
            @foreach ($posts as $post)
            <div class="item">
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__image__item">
                            <img style="width: 100%; height: 350px; object-fit: contain;" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ Str::limit($post->title, 30) }}">
                            <a href="{{ route('blog.post', $post->id) }}" class="blog-card__image__link"></a>
                        </div>
                        <div class="blog-card__date"> <span class="blog-card__date__day">{{ $post->created_at->day }}</span>{{ $post->created_at->format('M') }}</div><!-- /.blog-card__date -->
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__author">
                            <a href="{{ route('blog.post', $post->id) }}" class="blog-card__author__item">
                                <div class="blog-card__author__thumb">
                                    <img height="40px" src="{{ asset('assets/images/dna/dnalogo2.png') }}" alt="{{ $post->title }}" style="object-fit: cover">
                                </div>
                                <div class="blog-card__author__content">
                                    <h6 class="blog-card__author__name">DNA</h6>
                                    <span class="blog-card__author__deg">Admin</span>
                                </div>
                            </a>
                        </div><!-- /.list-unstyled blog-card__meta -->
                        <h3 class="blog-card__title"><a href="{{ route('blog.post', $post->id) }}">{{ Str::limit($post->title, 35) }}</a></h3><!-- /.blog-card__title -->
                        <div class="blog-card__content__btn">
                            <a href="{{ route('blog.post', $post->id) }}" class="blog-card__content__btn__link">Read More<i class="icon-arrow"></i></a><!-- /.blog-card__link -->
                        </div><!-- /.blog-card__btn -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            @endforeach
        </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- Blog-one section End -->
