@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing<span class="float-right"><a href="/dashboard" class="btn btn-outline-dark mb-2 btn-sm">Go back</a></span></div>

            <div class="card-body">
                <form action="/store" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Company Name:</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="company name">
                    </div>

                    <div class="form-group">
                        <label for="">Company Email:</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="contact email">
                    </div>

                    <div class="form-group">
                        <label for="">Company Phone:</label>
                        <input type="text" name="phone" id="" class="form-control" placeholder="contact phone">
                    </div>

                    <div class="form-group">
                        <label for="">Company Website:</label>
                        <input type="text" name="website" id="" class="form-control" placeholder="business website">
                    </div>

                    <div class="form-group">
                        <label for="">Company Address:</label>
                        <input type="text" name="address" id="" class="form-control" placeholder="buisness address location">
                    </div>

                    <div class="form-group">
                        <label for="">Company Bio:</label>
                        <textarea name="bio" id="" cols="30" rows="5" placeholder="about this business..." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="submit" class="btn btn-dark" name="submit">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
