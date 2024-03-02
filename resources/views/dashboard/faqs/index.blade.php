@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Questions - DNA Learning center.</p>

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
                        <h5 class="modal-title" id="exampleModalLabel">New FAQ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="m-0 p-0" action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="question">question</label>
                                    <input type="text" id="question" name="question" value="{{ old('question') }}" placeholder="Faq question..." required>

                                    @if ($errors->has('question'))
                                        <span class="text-danger">{{ $errors->first('question') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <textarea id="answer" name="answer" placeholder="Answer...">{{ old('answer') }}</textarea>

                                    @if ($errors->has('answer'))
                                        <span class="text-danger">{{ $errors->first('answer') }}</span>
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
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($faq->answer, '20') !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary btn-sm rounded-0">Edit</a>

                                            <button class="btn btn-sm btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this post?')) { document.getElementById('delete-form-{{ $faq->id }}').submit(); }"><i class="align-middle" data-feather="trash"></i> Delete</button>

                                            <form id="delete-form-{{ $faq->id }}" class="m-0 p-0" method="POST" action="{{ route('faq.destroy', $faq->id) }}">
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


    </div>
@endsection
