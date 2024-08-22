@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Webinar - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <a href="{{ route('webinar.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </a>
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
                                <th>School</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($webinars as $webinar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img height="50" class="thumbnail-fit" src="{{ url("/storage/" . $webinar->thumbnail) }}" alt=""></td>
                                    <td>{!! $webinar->title !!}</td>
                                    <td>{{ $webinar->school }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ route('webinar.edit', $webinar->id) }}" class="btn btn-primary btn-sm rounded-0">Edit</a> --}}
                                            <form class="m-0 p-0" id="delete" action="{{ route('webinar.destroy', $webinar->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                                <button form="delete" type="submit" class="btn btn-danger btn-sm rounded-0">Delete</button>
                                                <a href="{{ route('webinar.edit', [$webinar->id]) }}" class="btn btn-primary btn-sm rounded-0">Edit</a>
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
