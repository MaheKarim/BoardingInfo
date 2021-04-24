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
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title">Change Your Here</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-8">

                            <!-- error message -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <!-- error message end -->
                            <!-- Notification Start Here -->
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        <!-- Notification End Here -->
                            <form action="{{ route('admin.pass_update') }}" method="POST">

                                @csrf
                                <div class="form-group">
                                    <label for="text">Enter Your Old Password</label>
                                    <input type="text" class="form-control" name="oldpassword" id="text" placeholder="Enter Your Old Password">
                                </div>
                                <div class="form-group">
                                    <label for="text">Enter Your New Password</label>
                                    <input type="text" class="form-control" name="password" id="text" placeholder="Enter Your New Password">
                                </div>
                                <div class="form-group">
                                    <label for="text">Confirm Your New Password</label>
                                    <input type="text" class="form-control" name="password_confirmation" id="text" placeholder="Confirm Your New Password">
                                </div>

                            </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success">Submit</button>
                        <a href="#" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
