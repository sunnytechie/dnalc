@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Teams & Leaders - DNA Learning center.</p>

            <div class="btn-group">
                <a href="{{ route('team.index') }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                <button href="{{ route('team.create') }}" class="btn btn-primary btn-sm" style="margin-left: 5px">New + </button>
            </div>
        </div><!-- login-info -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">New Team/Leader</div>
                    <div class="card-body">
                        <form class="m-0 p-0" action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Fullname" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <select name="title" id="title" class="form-control">
                                        <option value="Mr">Mr.</option>
                                        <option value="Mrs">Mrs.</option>
                                        <option value="Miss">Miss.</option>
                                        <option value="Master">Master.</option>
                                        <option value="Prof">Prof.</option>
                                        <option value="Rev">Rev.</option>
                                        <option value="Hon">Hon.</option>
                                        <option value="Sir">Sir.</option>
                                        <option value="Engr">Engr.</option>
                                        <option value="Doc">Doc.</option>
                                        <option value="Intern">Intern</option>
                                        <option value="Head of Research">Head of Research</option>
                                        <option value="Head of Teaching">Head of Teaching</option>
                                        <option value="Security">Security</option>
                                        <option value="Janitor">Janitor</option>
                                    </select>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="administrative">Administrative</option>
                                        <option value="teaching">Teaching</option>
                                        <option value="research">Research</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="text-danger">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="thumbnail">User Profile Image</label>
                                    <input type="file" class="dropify" id="thumbnail" accept=".png, .jpg, .jpeg" name="thumbnail" required>

                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">{{ $errors->first('thumbnail') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <textarea id="content" class="form-control" name="about" value="{{ old('about') }}" placeholder="About leader or team..."></textarea>

                                    @if ($errors->has('about'))
                                        <span class="text-danger">{{ $errors->first('about') }}</span>
                                    @endif
                                </div>

                                {{-- quote --}}
                                <div class="form-group">
                                    <label for="quote">Quote</label>
                                    <input type="text" id="quote" name="quote" value="{{ old('quote') }}" placeholder="Quote by the leader or team">

                                    @if ($errors->has('quote'))
                                        <span class="text-danger">{{ $errors->first('quote') }}</span>
                                    @endif
                                </div>

                                {{-- experience --}}
                                <div class="form-group">
                                    <label for="experience">Experience</label>
                                    <input type="number" id="experience" name="experience" value="{{ old('experience') }}" placeholder="Years of experience">

                                    @if ($errors->has('experience'))
                                        <span class="text-danger">{{ $errors->first('experience') }}</span>
                                    @endif
                                </div>

                                {{-- email --}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email of the leader or team">

                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                {{-- phone --}}
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Phone of the leader or team">

                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>

                                {{-- facebook --}}
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="url" id="facebook" name="facebook" value="{{ old('facebook') }}" placeholder="Facebook link of the leader or team">

                                    @if ($errors->has('facebook'))
                                        <span class="text-danger">{{ $errors->first('facebook') }}</span>
                                    @endif
                                </div>

                                {{-- twitter --}}
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="url" id="twitter" name="twitter" value="{{ old('twitter') }}" placeholder="Twitter link of the leader or team">

                                    @if ($errors->has('twitter'))
                                        <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                    @endif
                                </div>

                                {{-- linkedin --}}
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin') }}" placeholder="Linkedin link of the leader or team">

                                    @if ($errors->has('linkedin'))
                                        <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                                    @endif
                                </div>

                                {{-- instagram --}}
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="url" id="instagram" name="instagram" value="{{ old('instagram') }}" placeholder="Instagram link of the leader or team">

                                    @if ($errors->has('instagram'))
                                        <span class="text-danger">{{ $errors->first('instagram') }}</span>
                                    @endif
                                </div>

                                {{-- certificate --}}
                                {{-- <div class="form-group">
                                    <label for="certificate">Certificate</label>
                                    <textarea id="description" name="certificate" value="{{ old('certificate') }}" placeholder="Summary of your achievements"></textarea>

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
