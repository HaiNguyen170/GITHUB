@extends('layouts.html')
@section('title')
    <title>Artical </title>

@endsection
@section('body')
    <div class="container">
        @foreach($article as $a)
            <div class="row">
                <div class="col-sm-12 col-sm-offset-6">
                    <h3>{{$a->title}}</h3>
                    <p>{{$a->content}}</p>
                    <p> <a href="{{  route('show', $a->id)}}"> Read more</a></p>
                </div>
            </div>
        @endforeach

        <div class="row text-center">
            <div class="col-sm-6 col-sm-offset-3">
                <p>{!! $article->render() !!}</p>
            </div>
        </div>
    </div>

@endsection
