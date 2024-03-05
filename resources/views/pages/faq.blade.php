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


<section class="faq-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                    <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="FAQS" class="sec-title__img">FAQS</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">Frequently asked question & answers here</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
            </div>
            <div class="col-lg-6">
                <div class="faq-page__search">
                    <form action="#" class="faq-page__search__item">
                        <button type="submit" aria-label="search submit">
                            <span><i class="icon-search"></i></span>
                        </button>
                        <input type="text" placeholder="Search here anything">
                    </form><!-- /.sidebar__search -->
                </div><!-- /.sidebar__single -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="faq-page__accordion laboix-accrodion" data-grp-name="laboix-accrodion">
                    @foreach ($faqs as $data)
                        <div class="accrodion @if ($loop->first)
                            active
                        @endif">
                            <div class="accrodion-title">
                                <h4 class="accrodion-title__text">{{ $data->question }}<span class="accrodion-title__icon"></span></h4>
                            </div><!-- /.accordian-title -->
                            <div class="accrodion-content">
                                <div class="inner">
                                    <div class="inner__text">{!! $data->answer !!}</div>
                                </div><!-- /.accordian-content -->
                            </div>
                        </div><!-- /.accordian-item -->
                    @endforeach

                </div>
            </div><!-- /.col-lg-8 col-xl-9 -->

            <div class="col-lg-6">
                <div class="faq-page__content">
                    <div class="faq-page__content__item">
                        <div class="faq-page__content__icon">
                            <i class="icon-email"></i>
                        </div>
                        <h4 class="faq-page__content__title">Ask our representative right now!</h4>
                        <div class="faq-page__content__action">
                            <span class="faq-page__content__action__top">Get answers</span>
                            <p class="faq-page__content__action__text"><a href="mailto:{{ $aboutInfo['email'] }}">{{ $aboutInfo['email'] }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-page__content">
                    <div class="faq-page__content__item">
                        <div class="faq-page__content__icon">
                            <i class="icon-telephone-call-1"></i>
                        </div>
                        <h4 class="faq-page__content__title">Still have questions? call now!</h4>
                        <div class="faq-page__content__action">
                            <span class="faq-page__content__action__top">Call anytime</span>
                            <p class="faq-page__content__action__text"><a href="tel:{{ $aboutInfo['phone'] }}">{{ $aboutInfo['phone'] }}</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->

    </div><!-- /.container -->
</section><!-- /.faq-page-accordion -->


@endsection
