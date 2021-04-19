@extends('home')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Category</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
      </nav>
</div>
@endsection
