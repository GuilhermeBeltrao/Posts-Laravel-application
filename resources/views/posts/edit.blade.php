@extends('layouts.app')

@section('content')

    <h1>Edit Post</h1>
    {{--<form method="POST" action="{{route('posts.update', ['post'=>$post->id])}}" enctype="application/x-www-form-urlencoded">
        {{method_field("PUT")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        <input type="text" name="title" value="{{$post->title}}" placeholder="Enter title">
        <input type="text" name="content" value="{{$post->content}}" placeholder="Enter content">
        <input type="number" name="user_id" value="{{$post->user_id}}" placeholder="enter user_id">              
        <button type="submit">Edit</button>
    </form>

    <form method="POST" action="{{route('posts.destroy', ['post'=>$post->id])}}" enctype="application/x-www-form-urlencoded">
        {{method_field("DELETE")}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>--}}

    {!!Form::model($post, [
        'method'=>'PATCH',
        'action'=>['App\Http\Controllers\PostsController@update', $post->id], 
        'files' => true
    ])!!}
    
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
    
    <div class="form-group">
        {!! Form::label('content', 'Content') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!!Form::label('user_id', null, ['class'=>'form-contro'])!!}
        {!!Form::number('user_id', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::file('file', ['class'=>'form-control'])!!}
    </div>

    {!!Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}
    
    {!!Form::model($post, ['method'=>'DELETE', 'action'=>['App\Http\Controllers\PostsController@destroy', $post->id]])!!}
    {!!Form::submit('Delete Post', ['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection