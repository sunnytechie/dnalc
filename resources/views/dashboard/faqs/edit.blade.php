@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Teams & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ route('faq.index') }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </button>
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Faq</div>
                    <div class="card-body">
                        <form class="m-0 p-0" action="{{ route('faq.update', $faq->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="question">question</label>
                                <input type="text" id="question" name="question" value="{{ old('question') ?? $faq->question }}" placeholder="Faq question..." required>

                                @if ($errors->has('question'))
                                    <span class="text-danger">{{ $errors->first('question') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <textarea id="answer" name="answer" placeholder="Answer...">{!! old('answer') ?? $faq->answer !!}</textarea>

                                @if ($errors->has('answer'))
                                    <span class="text-danger">{{ $errors->first('answer') }}</span>
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
