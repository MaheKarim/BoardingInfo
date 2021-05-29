@extends('user.home')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4"> Send Data</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Send Data</li>
        </ol>
      </nav>

      <form action="{{ route('user.dataStore') }}" method="POST">
        @csrf
          <div class="form-group">
            <label for="inputEmail4">Traveller  Name</label>
            <input type="text" class="form-control" name="traveler_name"  placeholder="Traveller Name">
          </div>
         <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Traveller Phone</label>
            <input type="text" class="form-control" name="traveler_phn" placeholder="Phone Number">
          </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Traveller Alter Phone</label>
          <input type="text" class="form-control" name="traveler_alt_phn" placeholder="Alternative Phone Number">
        </div>
    </div>

        <div class="form-group">
          <label for="inputAddress2">Traveller Booking Area</label>
          <input type="text" class="form-control" name="traveler_area" placeholder="Sajek, Rangamati, or Nilgiri">
        </div>

        <div class="form-group">
            <label for="inputCity">Cottage Name</label>
            <input type="text" class="form-control" id="inputCity" name="traveler_cottage_name" placeholder="Cottage Name">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Journey Start Date</label>
            <input type="date" class="form-control" id="inputCity" name="traveler_start_date">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Journey End Date</label>
            <input type="date" class="form-control" id="inputCity" name="traveler_end_date">
          </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Total Member</label>
                <input type="text" class="form-control" id="inputCity" name="total_member" placeholder="Total Member">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Total Bag</label>
                <input type="text" class="form-control" id="inputCity" name="total_bag" placeholder="Total Bag">
            </div>
        </div>
        <div class="form-group">
            <label for="inputCity">Comment</label>
            <input type="text" class="form-control" id="inputCity" name="comment" placeholder="Comment">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
      </form>

</div>

@endsection
