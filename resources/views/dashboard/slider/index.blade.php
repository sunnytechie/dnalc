@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Home Slides - DNA Learning center.</p>

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
                        <h5 class="modal-title" id="exampleModalLabel">New Slide</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="m-0 p-0" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Heading of your slide" required>

                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description" value="{{ old('description') }}" placeholder="Short description"></textarea>

                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="link">Link</label>
                                    <input type="url" id="link" name="link" value="{{ old('link') }}" placeholder="https://domain.com" required>

                                    @if ($errors->has('link'))
                                        <span class="text-danger">{{ $errors->first('link') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="flyer">Flyer (Appropriate size: 590x682)</label>
                                    <input type="file" id="flyer" accept=".png, .jpg, .jpeg" name="flyer" required>

                                    @if ($errors->has('flyer'))
                                        <span class="text-danger">{{ $errors->first('flyer') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">Background Image</label>
                                    <input type="file" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail" required>

                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </div>

                                {{-- <div class="form-group mb-3">
                                    <label for="logo">Logo (optional)</label>
                                    <input type="file" id="logo" accept=".png, .jpg, .jpeg" name="logo">

                                    @if ($errors->has('logo'))
                                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                                    @endif
                                </div> --}}
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
                                <th>Flyer</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img height="50px" width="50px" src="{{ asset('storage/' . $slider->flyer) }}" alt=""></td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($slider->description, 10) !!}</td>
                                    <td>{{ $slider->link }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                            <form class="m-0 p-0" action="{{ route('slider.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slide?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
