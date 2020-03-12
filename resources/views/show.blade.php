@extends('layouts.html')
@section('title')
    <title> Articles</title>
@endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm 12 col-sm-offset-6">
                <a href="{{route('index')}}" class="btn-btn-link">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-sm-offset-6">
                <h3>{{$article->title}}</h3>
                <p>{{$article->content}}</p>
            </div>
        </div>


    </div>

@endsection

