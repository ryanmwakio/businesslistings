@extends('layouts.app')

@section('content')
    <h6 class="bg-info text-white p-3">{{ $listing->name }} <span><a href="/" class="btn btn-outline-light btn-sm">Home</a></span></h6>
    <ul class="list-group">
        <li class="list-group-item">Email:&nbsp;&nbsp;&nbsp; {{ $listing->email }}</li>
        <li class="list-group-item">Phone:&nbsp;&nbsp;&nbsp; {{ $listing->phone }}</li>
        <li class="list-group-item">Website:&nbsp;&nbsp;&nbsp; {{ $listing->website }}</li>
        <li class="list-group-item">Address:&nbsp;&nbsp;&nbsp; {{ $listing->address }}</li>
        <hr>
        <li class="list-group-item bg-light">Bio:&nbsp;&nbsp;&nbsp; {{ $listing->bio }}</li>
    </ul>
@endsection
