@extends('layouts.app')

@section('content')
 <h5 class="border-left-black border-right-black bg-info p-3">All listings</h5>
    <div class="card">
        @if (count($listings)>0)
            <ul class="list-group">
                @foreach ($listings as $listing)
                    <li class="list-group-item mb-2">
                        <a href="/listing/{{ $listing->id }}">{{ $listing->name }}</a>
                    </li>
                @endforeach
            </ul>
        @else
        <div class="card p-2">
            <p class="text-danger">No listing found</p>
        </div>
        @endif
    </div>
@endsection
