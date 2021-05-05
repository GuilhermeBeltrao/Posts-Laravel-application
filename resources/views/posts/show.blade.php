@extends('layouts.app')

@section('content')
    <h1>Post Info</h1>

    <h2><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h2>
    <h2>{{$post->content}}</h2>
    <h2>{{$post->user_id}}</h2>
    <div class="image-container">
        <img height="100" src="/images/{{$post->path}}">
    </div>
    
@endsection
