@extends('admin-home')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4"> Show Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Show Data</li>
            </ol>
        </nav>
        <!-- Notification Start Here -->
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @elseif (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
    @endif
    <!-- Notification End Here -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTabase
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Traveler Name</th>
                            <th>Travel Destination</th>
                            <th>Traveler PHN</th>
                            <th>Traveler Alt PHN</th>
                            <th>Cottage Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Member</th>
                            <th>Total Bag</th>
                            <th>Comment</th>
                            <th>Report</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($datas as $item)
                            <tr>
                                <td>{{ $item->traveler_name }}</td>
                                <td>{{ $item->traveler_area }}</td>
                                <td>{{ $item->traveler_phn }}</td>
                                <td>{{ $item->traveler_alt_phn }}</td>
                                <td>{{ $item->traveler_cottage_name }}</td>
                                <td>{{ $item->traveler_start_date }}</td>
                                <td>{{ $item->traveler_end_date }}</td>
                                <td>{{ $item->total_member }}</td>
                                <td>{{ $item->total_bag }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    @if( $item->isApproved == 0 )
                                        <a href="{{ route('admin.edit_data', $item->id) }}" type="button" class="btn btn-danger">Edit</a>
                                    @elseif( $item->isApproved == 1 )
                                        <a href="{{ route('admin.edit_data', $item->id) }}" type="button" class="btn btn-success">Update</a>
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
@endsection
