@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Galleries - DNA Learning center.</p>

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
                        <h5 class="modal-title" id="exampleModalLabel">New Gallery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="m-0 p-0" action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    {{-- select category --}}
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option disabled>Select Category</option>
                                        <option value="workship">Workshop</option>
                                        <option value="summercamp">Summer Camp</option>
                                        <option value="scienceoutreach">Science Outreach</option>
                                        <option value="fieldtrip">Field Trip</option>
                                        <option value="dnaclasses">DNA Classes</option>
                                    </select>

                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="image">image</label>
                                    <input type="file" id="image" class="dropify" accept=".png, .jpg, .jpeg" name="image" required>

                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
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
                                <th>Category</th>
                                <th>Thumbnail</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->category }}</td>
                                    <td><img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" style="width: 50px; height: 50px; object-fit: cover"></td>

                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                                            <form class="m-0 p-0" action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slide?')">
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
