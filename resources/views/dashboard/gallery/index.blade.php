@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Galleries - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary btn-sm" style="margin-left: 5px">Categories</button>
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
                                        <option disabled selected>Choose</option>
                                        @foreach ($categories as $category)
                                            @foreach ($category->gallery_sub_categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach
                                        @endforeach
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
                                    <td>{{ $gallery->gallerysubcategory->title ?? null }}</td>
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


    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Categories</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>



                    <div class="modal-body">
                        @if ($categories->count() < 1)
                            <p>Nothing found, please add new.</p>
                        @endif
                        @foreach ($categories as $category)
                            <div class="category">

                                <div class="d-flex justify-content-between border-bottom align-items-center py-2 mb-2">
                                    <span class="title">{{ $category->title }}</span>
                                    <span><button form="delete-category" class="btn btn-sm btn-danger">Delete</button></span>
                                </div>
                                <form id="delete-category" action="{{ route('category.gallery.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category and all it sub-categories if any?')">@csrf @method('delete')</form>

                                @foreach ($category->gallery_sub_categories as $sub)
                                    <div class="d-flex justify-content-between align-items-center ms-4 mb-1">
                                        <span>{{ $sub->title }}</span>
                                        <button form="delete-sub-category" class="btn btn-sm btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <form id="delete-sub-category" action="{{ route('sub.category.gallery.destroy', $sub->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to this sub category?')">@csrf @method('delete')</form>
                                @endforeach
                            </div>
                        @endforeach

                    </div>


                    <div class="modal-footer">
                        <button data-bs-toggle="modal" data-bs-target="#newCategoryModal" class="btn btn-primary" style="margin-left: 5px">New Category</button>
                        <button data-bs-toggle="modal" data-bs-target="#newSubCategoryModal" class="btn btn-primary" style="margin-left: 5px">New SubCategory</button>
                    </div>

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

                    <form class="m-0 p-0" action="{{ route('category.gallery.store') }}" method="POST" enctype="multipart/form-data">
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
                                <small id="helpId" class="text-muted text-right">Main title</small>
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
                            <button type="submit" class="btn btn-success">Publish</button>
                            <button data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary" style="margin-left: 5px">Categories</button>
                            <button data-bs-toggle="modal" data-bs-target="#newSubCategoryModal" class="btn btn-primary" style="margin-left: 5px">New SubCategory</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>



    <div class="modal fade" id="newSubCategoryModal" tabindex="-1" aria-labelledby="newSubCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubCategoryModalLabel">New SubCategory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('sub.category.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="my-3">
                                <label for="title" class="title">Category</label>
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    class="form-control"
                                    placeholder="Title"
                                    aria-describedby="helpId"
                                    required
                                />
                                <small id="helpId" class="text-muted text-right">Main title</small>
                            </div>

                            <div class="form-group mb-3">
                                <label for="image">image</label>
                                <input type="file" id="image" class="dropify" accept=".png, .jpg, .jpeg" name="image" required>

                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Category</label>
                                <select name="category" id="category" class="form-control">
                                    <option selected disabled>Choose</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach

                                </select>
                                <small id="helpId" class="text-muted">Main title</small>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Publish</button>
                            <button data-bs-toggle="modal" data-bs-target="#newCategoryModal" class="btn btn-primary" style="margin-left: 5px">New Category</button>
                            <button data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary" style="margin-left: 5px">Categories</button>
                        </div>
                    </form>
                </div>

        </div>
    </div>
@endsection
