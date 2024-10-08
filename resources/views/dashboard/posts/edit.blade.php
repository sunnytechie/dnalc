@extends('layouts.admin')
@section('content')
<style>
    input[type=text], input[type=file], select {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
</style>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Teams & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </a>
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card mb-5">
                    <div class="card-header">Post</div>
                    <div class="card-body">
                        <form class="m-0 p-0" action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="" class="form-label">Categorise you news</label>
                                <select name="category" id="category" class="form-control">
                                    <option selected disabled>Choose</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $post->postcategory_id ? 'selected' : '' }}>{{ $category->title }}</option>
                                    @endforeach

                                </select>
                            </div>

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" value="{{ old('title') ?? $post->title }}" placeholder="Title..." required>

                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="school">School</label>
                                    <select name="school" id="school" class="">
                                        <option
                                        @if ($post->school == 'cedfoci')
                                            selected
                                        @endif
                                        value="cedfoci">CeDFOCI</option>
                                        <option
                                        @if ($post->school == 'cefarai')
                                            selected
                                        @endif
                                        value="cefarai">CeFARAI</option>
                                        <option
                                        @if ($post->school == "cetras")
                                            selected
                                        @endif
                                        value="cetras">CeTRAS</option>
                                        <option
                                        @if ($post->school == 'cesavims')
                                            selected
                                        @endif
                                        value="cesavims">CeSAVIMS</option>
                                        <option
                                        @if ($post->school == 'cesisten')
                                            selected
                                        @endif
                                        value="cesisten">CeSISTEN</option>
                                    </select>
                                    @if ($errors->has('school'))
                                        <span class="text-danger">{{ $errors->first('school') }}</span>
                                    @endif
                                </div>


                                <div class="form-group mb-3">
                                    <label for="content">Content</label>
                                    <textarea id="content" name="content" placeholder="Compose post">{{ old('content') ?? $post->content }}</textarea>

                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="dropify" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail" data-default-file="{{ asset('storage/' . $post->thumbnail) }}">

                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
