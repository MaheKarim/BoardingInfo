@extends('user.home')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
   @endif


     <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Travel Destination</th>
                            <th>Traveler Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Member</th>
                            <th>Total Bag</th>
                            <th>Report</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($datas as $item)
                        <tr>
                            <td>{{ $item->traveler_area }}</td>
                            <td>{{ $item->traveler_name }}</td>
                            <td>{{ $item->traveler_start_date }}</td>
                            <td>{{ $item->traveler_end_date }}</td>
                            <td>{{ $item->total_member }}</td>
                            <td>{{ $item->total_bag }}</td>
                            <td>
                                @if ( $item->isApproved == 1 )
                                    Accepted


                                @elseif ( $item->isApproved == 0 )

                                    Pending

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

