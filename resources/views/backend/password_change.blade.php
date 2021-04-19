@extends('admin-home')

@section('content')
  <div class="container-fluid">
      <h1 class="mt-4">Password Change</h1>
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Password Change</li>
          </ol>
      </nav>
      <form action="{{ route('admin.pass_update') }}" method="POST">
            @csrf
          <div class="form-group">
              <label for="exampleInputPassword1">Old Password</label>
              <input type="text" class="form-control" name="old_password" placeholder="Old Password">
          </div>
          <div class="form-group">
              <label for="exampleNewPassword1">New Password</label>
              <input type="password" class="form-control" name="new_password" placeholder="New Password">
          </div>
          <div class="form-group">
              <label for="exampleConfirmPassword1">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
          </div>

          <button type="submit" class="btn btn-outline-info">Update Password</button>
      </form>
  </div>
@endsection
