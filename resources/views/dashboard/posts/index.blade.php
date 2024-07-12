@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Blog Posts & Articles - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button data-bs-toggle="modal" data-bs-target="#newCategoryModal" class="btn btn-primary btn-sm" style="margin-left: 5px">New Category</button>
                <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New Post + </a>
            </div>
        </div><!-- login-info -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="dnaDataTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="img-fluid" style="width: 50px; height: 50px; object-fit: cover">
                                    </td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->postcategory->title ?? '' }}</td>
                                    {{-- <td>{!! \Illuminate\Support\Str::limit($post->content, 10) !!}</td> --}}
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <button class="btn btn-sm btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this post?')) { document.getElementById('delete-form-{{ $post->id }}').submit(); }"><i class="align-middle" data-feather="trash"></i> Delete</button>

                                            <form id="delete-form-{{ $post->id }}" class="m-0 p-0" method="POST" action="{{ route('post.destroy', $post->id) }}">
                                                @csrf
                                                @method('DELETE')
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="m-0 p-0" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Title..." required>

                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="content">Content</label>
                                        <textarea id="content" name="content" placeholder="Compose post">{{ old('content') }}</textarea>

                                        @if ($errors->has('content'))
                                            <span class="text-danger">{{ $errors->first('content') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" class="dropify" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail">

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

            <div class="modal fade" id="newCategoryModal" tabindex="-1" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newCategoryModalLabel">New Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form class="m-0 p-0" action="{{ route('post.category.create') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-body">
                                    <div class="my-3">
                                        <label for="title" class="form-label">Category</label>
                                        <input
                                            type="text"
                                            name="title"
                                            id="title"
                                            class="form-control"
                                            placeholder="Title"
                                            aria-describedby="helpId"
                                            required
                                        />
                                    </div>

                                </div>


                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Publish</button>
                                </div>
                            </form>
                        </div>

                </div>
            </div>
    </div>
@endsection
