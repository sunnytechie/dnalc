@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">About - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                {{-- <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </a> --}}
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-12">
                <form class="m-0 p-0" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>General Information</div>
                            <button type="submit" class="btn btn-primary d-flex align-items-center"><span style="margin-right: 6px">Publish</span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                              </svg></button>
                        </div>

                        <div class="card-body">

                                <div class="form-group mb-2">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $about->title }}" placeholder="Enter title">

                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="description">Description</label>
                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description">{{ old('description') ?? $about->description }}</textarea>

                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="heading_1">1st Heading</label>
                                    <input type="text" class="form-control" id="heading_1" name="heading_1" value="{{ old('heading_1') ?? $about->heading_1 }}" placeholder="Enter heading_1">

                                    @error('heading_1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="content_1">1st Content</label>
                                    <textarea type="text" class="form-control" id="content_1" name="content_1" placeholder="Enter content_1">{{ old('content_1') ?? $about->content_1 }}</textarea>

                                    @error('content_1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="heading_2">2nd Heading</label>
                                    <input type="text" class="form-control" id="heading_2" name="heading_2" value="{{ old('heading_2') ?? $about->heading_2 }}" placeholder="Enter heading_2">

                                    @error('heading_2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="heading_2_content">2nd Content</label>
                                    <textarea type="text" class="form-control" id="heading_2_content" name="heading_2_content" placeholder="Enter heading_2_content">{{ old('heading_2_content') ?? $about->heading_2_content }}</textarea>

                                    @error('heading_2_content')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="content">Content (optional)</label>
                                    <textarea type="text" class="form-control" id="content" name="content" placeholder="Enter content">{{ old('content') ?? $about->content }}</textarea>

                                    @error('content')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- <div class="form-group mb-2">
                                    <label for="list_1">First List (Optional)</label>
                                    <input type="text" class="form-control" id="list_1" name="list_1" value="{{ old('list_1') ?? $about->list_1 }}" placeholder="Enter list_1">

                                    @error('list_1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="list_2">2nd list (optional)</label>
                                    <input type="text" class="form-control" id="list_2" name="list_2" value="{{ old('list_2') ?? $about->list_2 }}" placeholder="Enter list_2">

                                    @error('list_2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="list_3">3rd list (optional)</label>
                                    <input type="text" class="form-control" id="list_3" name="list_3" value="{{ old('list_3') ?? $about->list_3 }}" placeholder="Enter list_3">

                                    @error('list_3')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group row mb-2">
                                    <div class="col-md-6">
                                        <label for="thumbnail">1st Thumbnail</label>
                                        <div class="dropify-wrapper">
                                            <input type="file" class="form-control dropify" id="thumbnail" name="thumbnail" data-default-file="{{ asset('storage/' . $about->thumbnail) }}">
                                            <div class="dropify-preview">
                                                <span class="dropify-render"></span>
                                                <div class="dropify-infos">
                                                    <div class="dropify-infos-inner">
                                                        <p class="dropify-filename">
                                                            <span class="dropify-filename-inner"></span>
                                                        </p>
                                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                        <button type="button" class="dropify-clear">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @error('thumbnail')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="thumbnail_2">2st Thumbnail</label>
                                        <div class="dropify-wrapper">
                                            <input type="file" class="form-control dropify" id="thumbnail_2" name="thumbnail_2" data-default-file="{{ asset('storage/' . $about->thumbnail_2) }}">
                                            <div class="dropify-preview">
                                                <span class="dropify-render"></span>
                                                <div class="dropify-infos">
                                                    <div class="dropify-infos-inner">
                                                        <p class="dropify-filename">
                                                            <span class="dropify-filename-inner"></span>
                                                        </p>
                                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                        <button type="button" class="dropify-clear">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @error('thumbnail_2')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <h3 class="mt-4">Contact information</h3>

                                <div class="form-group mb-2">
                                    <label for="phone">Office Phone 1</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $about->phone }}" placeholder="Enter phone">

                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="phone_2">Office Phone 2</label>
                                    <input type="tel" class="form-control" id="phone_2" name="phone_2" value="{{ old('phone_2') ?? $about->phone_2 }}" placeholder="Enter phone">

                                    @error('phone_2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="email">Office Email 1</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ?? $about->email }}" placeholder="Enter email">

                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="email_2">Office Email 2</label>
                                    <input type="email" class="form-control" id="email_2" name="email_2" value="{{ old('email_2') ?? $about->email_2 }}" placeholder="Enter email">

                                    @error('email_2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="address">Office address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ?? $about->address }}" placeholder="Enter address">

                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="facebook">Facebook</label>
                                    <input type="url" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') ?? $about->facebook }}" placeholder="Enter facebook link">

                                    @error('facebook')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="twitter">Twitter</label>
                                    <input type="url" class="form-control" id="twitter" name="twitter" value="{{ old('twitter') ?? $about->twitter }}" placeholder="Enter twitter link">

                                    @error('twitter')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="instagram">Instagram</label>
                                    <input type="url" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') ?? $about->instagram }}" placeholder="Enter instagram link">

                                    @error('instagram')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="url" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin') ?? $about->linkedin }}" placeholder="Enter linkedin link">

                                    @error('linkedin')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <h3 class="mt-4">Schedules</h3>
                                <div class="form-group mb-2">
                                    <label for="sunday_schedule">Sunday</label>
                                    <input type="text" class="form-control" id="sunday_schedule" name="sunday_schedule" value="{{ old('sunday_schedule') ?? $about->sunday_schedule }}" placeholder="Enter email">

                                    @error('sunday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="monday_schedule">Monday</label>
                                    <input type="text" class="form-control" id="monday_schedule" name="monday_schedule" value="{{ old('monday_schedule') ?? $about->monday_schedule }}" placeholder="Enter email">

                                    @error('monday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="tuesday_schedule">Tuesday</label>
                                    <input type="text" class="form-control" id="tuesday_schedule" name="tuesday_schedule" value="{{ old('tuesday_schedule') ?? $about->tuesday_schedule }}" placeholder="Enter email">

                                    @error('tuesday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="wednesday_schedule">Wednesday</label>
                                    <input type="text" class="form-control" id="wednesday_schedule" name="wednesday_schedule" value="{{ old('wednesday_schedule') ?? $about->wednesday_schedule }}" placeholder="Enter email">

                                    @error('wednesday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="thursday_schedule">Thursday</label>
                                    <input type="text" class="form-control" id="thursday_schedule" name="thursday_schedule" value="{{ old('thursday_schedule') ?? $about->thursday_schedule }}" placeholder="Enter email">

                                    @error('thursday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="friday_schedule">Friday</label>
                                    <input type="text" class="form-control" id="friday_schedule" name="friday_schedule" value="{{ old('friday_schedule') ?? $about->friday_schedule }}" placeholder="Enter email">

                                    @error('friday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="saturday_schedule">Saturday</label>
                                    <input type="text" class="form-control" id="saturday_schedule" name="saturday_schedule" value="{{ old('saturday_schedule') ?? $about->saturday_schedule }}" placeholder="Enter email">

                                    @error('saturday_schedule')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group my-4">
                                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                                        <span style="margin-right: 6px">Publish</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z"/>
                                        </svg>
                                    </button>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
