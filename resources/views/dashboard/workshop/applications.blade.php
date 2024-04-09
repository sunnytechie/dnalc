@extends('layouts.admin')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="login-page__info d-flex justify-content-between align-items-center">
            <p class="login-page__info__item">Applications on - {{ $workshop->title }}</p>

            <div class="btn-group">
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-sm">Back</a>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Dashboard</a>
                {{-- <a href="{{ route('workshop.create') }}" class="btn btn-primary btn-sm">+ New</a> --}}
            </div>
        </div><!-- login-info -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="dnaDataTable" class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Institution</th>
                                <th>Scholarship</th>
                                <th>Referral</th>
                                <td>Method</td>
                                <th>Downloadables</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applications as $application)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $application->fullname }}</td>
                                    <td>{{ $application->email }}</td>
                                    <td>{{ $application->phone }}</td>
                                    <td>{{ $application->institution }}</td>
                                    <td>{{ $application->scholarship }}</td>
                                    <td>{{ $application->referral }}</td>
                                    <td>
                                        @if ($application->receipt == null)
                                            Online
                                                @else
                                            Bank
                                        @endif
                                    </td>
                                    <td>
                                        @if ($application->receipt)
                                            <a href="{{ asset('storage/' . $application->receipt) }}" download="" class="btn btn-primary btn-sm rounded-0">Download Receipt</a>
                                        @endif
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

