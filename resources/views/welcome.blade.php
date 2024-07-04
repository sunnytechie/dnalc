@extends('layouts.app')
@section('content')
<style>
    .blog-card__title, .blog-card__content__btn a, .team-card__content__title {
        font-size: 12px;
    }

    .sec-title__title {
        font-size: 35px;
    }
</style>
    @include('snippets.main.page_slider')
    {{-- @include('snippets.main.slide') --}}
    {{-- @include('snippets.main.newslider') --}}
    @include('snippets.main.about')
    @include('snippets.main.whychooseus')
    @include('snippets.main.webinar')
    @include('snippets.main.resource')
    {{-- @include('snippets.main.testimonials') --}}
    @include('snippets.main.team')
    @include('snippets.main.contact')
    @include('snippets.main.posts')
    @include('snippets.main.sponsors')
    @include('snippets.main.faqs')
    {{-- @include('snippets.main.newsletter') --}}
@endsection
