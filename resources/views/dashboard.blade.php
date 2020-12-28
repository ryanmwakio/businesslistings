@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Listings<span class="float-right"><a href="/listings/create" class="btn btn-dark btn-sm">Add Listing</a><a href="/" class="btn btn-outline-dark btn-sm ml-2">Home</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    @if (count($listings)>0)
                        <table class="table table-striped">
                            <tr class="bg-info">
                                <th class='text-white'>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td><a href="/listing/{{ $listing->id }}">{{ $listing->name }}</a></td>
                                    <td><a class="btn btn-dark btn-sm float-right" href="/listings/{{ $listing->id }}/edit">Edit</a></td>
                                    <td>
                                        <form action="/listing/delete/{{ $listing->id }}" method="post">
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
