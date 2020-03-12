@extends('layouts.html')
@section('title')
    <title>Admin</title>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm 6 col-sm-offset-3">
                <h2>List of student</h2>
                <hr>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Date of birth</th>
                        <th>Favorite</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->email}}</td>
                            <td>{{$s->password}}</td>
                            <td>{{$s->address}}</td>
                            <td>{{$s->phone}}</td>
                            <td>{{$s->DOB}}</td>
                            <td>{{$s->favorite}}</td>
                            <td>
                                <a href="{{route('edit' , $s->id)}}"><button class="btn btn-primary">Edit</button></a>
                                {!! Form::open([
                                    'route'=>['destroy', $s->id],
                                    'method'=>'DELETE',
                                    'style'=>'display: inline',
                                ]) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}

                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <hr>
@endsection
