@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Webinar - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </button>
            </div>
        </div><!-- login-info -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Webinar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="m-0 p-0" action="{{ route('webinar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title">

                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
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

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="dnaDataTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Thumbnail</th>
                                <th>title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webinars as $webinar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img height="50" class="thumbnail-fit" src="/{{ $webinar->thumbnail }}" alt=""></td>
                                    <td>{!! $webinar->title !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ route('webinar.edit', $webinar->id) }}" class="btn btn-primary btn-sm rounded-0">Edit</a> --}}
                                            <form class="m-0 p-0" action="{{ route('webinar.destroy', $webinar->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm rounded-0">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            </div>
        </div>


    </div>
@endsection
