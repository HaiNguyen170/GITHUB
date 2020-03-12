@extends('layouts.html')
@section('title')
    <title>Create Page</title>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                <h1>Create new student</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                <form action="{{route('store')}}" METHOD="POST" class="form-horizontal">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="control-label">Student Name</label>
                        <input type="text" name="name" id="name" required placeholder="Write name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input type="text" name="email" id="email" required placeholder="Write Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="text" name="password" id="password" required placeholder="Write password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Address</label>
                        <input type="text" name="address" id="address" required placeholder="Write address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label">Phone Number</label>
                        <input type="text" name="phone" id="phone" required placeholder="Write phone number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="DOB" class="control-label">Date of birth</label>
                        <input type="text" name="DOB" id="DOB" required placeholder="Write date of birth yy-mm-dd" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="favorite" class="control-label">Favorite</label>
                        <input type="text" name="favorite" id="favorite" required placeholder="Write favorite" class="form-control">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" > Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
