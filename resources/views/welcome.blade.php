@extends('layouts.app')
@section('content')
    @include('snippets.main.slider')
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
