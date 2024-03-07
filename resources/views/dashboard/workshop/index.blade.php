@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">workshop)s & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <a href="{{ route('workshop.create') }}" class="btn btn-primary btn-sm">+ New</a>
            </div>
        </div><!-- login-info -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="dnaDataTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Flyer</th>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Venue</th>
                                <th>Status</th>
                                <th>Applications</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workshops as $workshop)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img class="thumbnail-fit" src="{{ asset('storage/' . $workshop->flyer) }}" alt=""></td>
                                    <td>{{ $workshop->title }}</td>
                                    <td>{{ $workshop->type }}</td>
                                    <td>{{ $workshop->venue }}</td>
                                    <td>
                                        @if ($workshop->status == 'active')
                                            <button class="btn btn-sm btn-success">Published</button>
                                        @else
                                            <button class="btn btn-sm btn-danger">Unplished</button>
                                        @endif
                                    </td>
                                     <td>Count</td> {{--{{ $workshop)->registers->count() }} --}}
                                    <td>{{ \Carbon\Carbon::parse($workshop->created_at)->format('j M Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('workshop.edit', $workshop->id) }}" class="btn btn-primary btn-sm rounded-0">Edit</a>
                                            <form class="m-0 p-0" action="{{ route('workshop.destroy', $workshop->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
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

