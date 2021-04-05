@extends('admin-home')

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4"> Update Data</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Update Data</li>
            </ol>
        </nav>

        <form action="{{ route('admin.update_data', $datas->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Update Status</label>
                <input type="text" class="form-control" name="isApproved" value="{{ $datas->isApproved }}" placeholder="1 = Approved, 0 = Pending">
                <input type="hidden" name="isApproved_id" value="{{ $datas->id }}">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
