@extends('layouts.admin')
@section('content')
<style>
    input[type=text], input[type=file], input[type=date], input[type=url], select {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }
</style>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Teams & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="#" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <a href="#" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </a>
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card p-0">
                    <div class="card-header">Webinar/Events</div>
                    <div class="card-body">
                        <form class="m-0 p-0" action="{{ route('webinar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title">

                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="event_date">Event Date</label>
                                    <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" placeholder="Schedule">

                                    @if ($errors->has('event_date'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="school">School</label>
                                    <select name="school" id="school" class="">
                                        <option selected value="cedfoci">CeDFOCI</option>
                                        <option value="cefarai">CeFARAI</option>
                                        <option value="cetras">CeTRAS</option>
                                        <option value="cesavims">CeSAVIMS</option>
                                        <option value="cesisten">CeSISTEN</option>
                                    </select>
                                    @if ($errors->has('school'))
                                        <span class="text-danger">{{ $errors->first('school') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">Thumbnail</label>
                                    <input type="file" class="dropify" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail" required>

                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="link">Link</label>
                                    <input type="url" id="link" name="link" value="{{ old('link') }}" placeholder="https://....">

                                    @if ($errors->has('link'))
                                        <span class="text-danger">{{ $errors->first('link') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="content">Content</label>
                                    <textarea id="content" name="content" placeholder="Compose post">{{ old('content') }}</textarea>

                                    @if ($errors->has('content'))
                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                    @endif
                                </div>

                            <button type="submit" class="btn btn-primary">Publish</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
