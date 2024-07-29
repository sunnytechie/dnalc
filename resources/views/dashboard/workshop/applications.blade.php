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
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="table-responsive">
                        <table id="dnaDataTable" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Unique Id.</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Institution</th>
                                    <th>Scholarship</th>
                                    <th>Referral</th>
                                    <th>Status</th>
                                    <td>Method</td>
                                    <th>Downloadables</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td style="white-space: nowrap">{{ "INN/GOU/" . $application->created_at->format('Y') . "/" . $application->id }}</td>
                                        <td style="white-space: nowrap">{{ $application->fullname }}</td>
                                        <td style="white-space: nowrap">{{ $application->email }}</td>
                                        <td style="white-space: nowrap">{{ $application->phone }}</td>
                                        <td style="white-space: nowrap">{{ $application->institution }}</td>
                                        <td style="white-space: nowrap">{{ $application->scholarship }}</td>
                                        <td style="white-space: nowrap">{{ $application->referral }}</td>
                                        <td style="text-transform: capitalize">{{ $application->status }}</td>
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
                                        <td>

                                            <form id="deleteApply-{{ $application->id }}" class="m-0 p-0" action="{{ route('destroy.workshop.applications', $application->id) }}" method="POST">
                                                @method('patch')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')" form="deleteApply-{{ $application->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>

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


    </div>
@endsection

