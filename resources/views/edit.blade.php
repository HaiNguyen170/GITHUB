@extends('layouts.html')
@section('title')
    <title>Edit Page</title>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                <h1>Edit information of student</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                {!! Form::model($student,[
                    'route' =>['update', $student->id],
                    'method' => 'PUT',
                    'class' => 'form-horizontal',
                ]) !!}
                <div class="form-group">

                    {!! Form::label('name', 'Student Name', ['class'=>'control-label']) !!}
                    {!! Form::text('name', null,['id'=>'name', 'class'=>'form-control', 'placeholder'=>'Write student name', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('email', 'Email', ['class'=>'control-label']) !!}
                    {!! Form::text('email', null ,['id'=>'email', 'class'=>'form-control', 'placeholder'=>'Write Email', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class'=>'control-label']) !!}
                    {!! Form::text('password', '',['id'=>'password', 'class'=>'form-control', 'placeholder'=>'Write password', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('address', 'Address', ['class'=>'control-label']) !!}
                    {!! Form::text('address', null ,['id'=>'address', 'class'=>'form-control', 'placeholder'=>'Write address', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('phone', 'Phone number', ['class'=>'control-label']) !!}
                    {!! Form::text('phone', null ,['id'=>'phone', 'class'=>'form-control', 'placeholder'=>'Write phone number', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('DOB', 'Date of birth', ['class'=>'control-label']) !!}
                    {!! Form::text('DOB', null ,['id'=>'DOB', 'class'=>'form-control', 'placeholder'=>'Write date off birth', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">

                    {!! Form::label('favorite', 'Favorite', ['class'=>'control-label']) !!}
                    {!! Form::text('favorite', null ,['id'=>'favorite', 'class'=>'form-control', 'placeholder'=>'Write favorite', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit', ['class'=>'btn-btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
