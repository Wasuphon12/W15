@extends('layouts.app')

@section('title')
   {{$blogs->title}}
@endsection

@section('content')
    <h1>{{$blogs->title}}</h1>
    <hr>
    <div class="blog-content">
        {!! $blogs->content !!}
    </div>

    <style>
        .blog-content iframe {
            max-width: 100%;
        }
        .blog-content img {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
