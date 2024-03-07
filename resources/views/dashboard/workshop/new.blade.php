@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Workshop Schedules & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </button>
            </div>
        </div><!-- login-info -->


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="m-0 p-0" action="{{ route('workshop.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="type">Event type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="workshop">Workshop</option>
                                        <option value="seminar">Seminar</option>
                                        <option value="conference">Conference</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="start_date">Start Date</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}">
                                    @if ($errors->has('start_date'))
                                        <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="end_date">End Date</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}">
                                    @if ($errors->has('end_date'))
                                        <span class="text-danger">{{ $errors->first('end_date') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="venue">Venue</label>
                                    <input type="text" class="form-control" id="venue" name="venue" value="{{ old('venue') }}">
                                    @if ($errors->has('venue'))
                                        <span class="text-danger">{{ $errors->first('venue') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="slots">Available Slots</label>
                                    <input type="number" class="form-control" id="slots" name="slots" value="{{ old('slots') }}">
                                    @if ($errors->has('slots'))
                                        <span class="text-danger">{{ $errors->first('slots') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="fee">Fee(₦)</label>
                                    <input type="number" class="form-control" id="fee" name="fee" value="{{ old('fee') }}">
                                    @if ($errors->has('fee'))
                                        <span class="text-danger">{{ $errors->first('fee') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                    <label for="note">Note</label>
                                    <textarea name="note" id="description" class="form-control" rows="5">{{ old('note') }}</textarea>
                                    @if ($errors->has('note'))
                                        <span class="text-danger">{{ $errors->first('note') }}</span>
                                    @endif
                                </div>

                                <div class="form-group col-md-4 mb-3">
                                    <label for="flyer">Flyer</label>
                                    <input type="file" class="form-control" id="flyer" name="flyer">
                                    @if ($errors->has('flyer'))
                                        <span class="text-danger">{{ $errors->first('flyer') }}</span>
                                    @endif
                                </div>
                            </div>

                            {{-- submit --}}
                            <div class="form-group mt-3"></div>
                                <button type="submit" class="btn btn-md btn-primary">Publish</button>
                            </div>
                    </form>
                </div>
            </div>

            </div>
        </div>


    </div>
@endsection
