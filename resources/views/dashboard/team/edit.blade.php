@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Teams & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ route('team.index') }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <a href="{{ route('team.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </a>
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Team/Leader</div>
                    <div class="card-body">
                        <form class="m-0 p-0" action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') ?? $team->name }}" placeholder="Fullname" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <select name="title" id="title" class="form-control">
                                        <option @if ($team->title == "Mr") selected @endif>Mr.</option>
                                        <option @if ($team->title == "Mrs") selected @endif>Mrs.</option>
                                        <option @if ($team->title == "Miss") selected @endif>Miss.</option>
                                        <option @if ($team->title == "Master") selected @endif>Master.</option>
                                        <option @if ($team->title == "Prof") selected @endif>Prof.</option>
                                        <option @if ($team->title == "Rev") selected @endif>Rev.</option>
                                        <option @if ($team->title == "Hon") selected @endif>Hon.</option>
                                        <option @if ($team->title == "Sir") selected @endif>Sir.</option>
                                        <option @if ($team->title == "Engr") selected @endif>Engr.</option>
                                        <option @if ($team->title == "Doc") selected @endif>Doc.</option>
                                        <option @if ($team->title == "Intern") selected @endif>Intern</option>
                                        <option @if ($team->title == "Head of Research") selected @endif>Head of Research</option>
                                        <option @if ($team->title == "Head of Teaching") selected @endif>Head of Teaching</option>
                                        <option @if ($team->title == "Security") selected @endif>Security</option>
                                        <option @if ($team->title == "Janitor") selected @endif>Janitor</option>
                                    </select>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option @if ($team->category == "administrative") selected @endif value="administrative">Administrative</option>
                                        <option @if ($team->category == "teaching") selected @endif value="teaching">Teaching</option>
                                        <option @if ($team->category == "research") selected @endif value="research">Research</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">User Profile Image(Leave empty if you don't want to update)</label>
                                    {{-- <label for="thumbnail"><img class="thumbnail-fit" src="" alt=""></label> --}}
                                    <input type="file" class="dropify" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail" data-default-file="{{ asset('storage/' . $team->thumbnail) }}">

                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <textarea id="content" class="form-control" name="about" placeholder="About leader or team...">{{ old('about') ?? $team->about }}</textarea>

                                    @if ($errors->has('about'))
                                        <span class="text-danger">{{ $errors->first('about') }}</span>
                                    @endif
                                </div>

                                {{-- quote --}}
                                <div class="form-group">
                                    <label for="quote">Quote</label>
                                    <input type="text" id="quote" name="quote" value="{{ old('quote') ?? $team->quote }}" placeholder="Quote by the leader or team">

                                    @if ($errors->has('quote'))
                                        <span class="text-danger">{{ $errors->first('quote') }}</span>
                                    @endif
                                </div>

                                {{-- experience --}}
                                <div class="form-group">
                                    <label for="experience">Experience</label>
                                    <input type="number" id="experience" name="experience" value="{{ old('experience') ?? $team->experience }}" placeholder="Years of Experience">

                                    @if ($errors->has('experience'))
                                        <span class="text-danger">{{ $errors->first('experience') }}</span>
                                    @endif
                                </div>

                                {{-- email --}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') ?? $team->email }}" placeholder="Email of the leader or team">

                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                {{-- phone --}}
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') ?? $team->phone }}" placeholder="Phone of the leader or team">

                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                {{-- facebook --}}
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="url" id="facebook" name="facebook" value="{{ old('facebook') ?? $team->facebook }}" placeholder="Facebook link of the leader or team">

                                    @if ($errors->has('facebook'))
                                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                    @endif
                                </div>

                                {{-- twitter --}}
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="url" id="twitter" name="twitter" value="{{ old('twitter') ?? $team->twitter }}" placeholder="Twitter link of the leader or team">

                                    @if ($errors->has('twitter'))
                                        <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                    @endif
                                </div>

                                {{-- linkedin --}}
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin') ?? $team->linkedin }}" placeholder="Linkedin link of the leader or team">

                                    @if ($errors->has('linkedin'))
                                        <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                                    @endif
                                </div>

                                {{-- instagram --}}
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="url" id="instagram" name="instagram" value="{{ old('instagram') ?? $team->instagram }}" placeholder="Instagram link of the leader or team">

                                    @if ($errors->has('instagram'))
                                        <span class="text-danger">{{ $errors->first('instagram') }}</span>
                                    @endif
                                </div>

                                {{-- certificate --}}
                                {{-- <div class="form-group mb-4">
                                    <label for="certificate">Certificate</label>
                                    <textarea id="description" name="certificate" placeholder="Summary of your achievements">{{ old('certificate') ?? $team->certificate }}</textarea>

                                    @if ($errors->has('certificate'))
                                        <span class="text-danger">{{ $errors->first('certificate') }}</span>
                                    @endif
                                </div> --}}

                            <button type="submit" class="btn btn-primary mt-4">Publish</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
