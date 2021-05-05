@extends('layouts.app')

@section('content')

    {{--<form method="POST" action="{{ route('posts.store') }}" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" placeholder="Enter title">
        <input type="text" name="content" placeholder="Enter content">       
        <input type="number" name="user_id" placeholder="enter user_id">
        <button type="submit">CREATE</button>
    </form>--}}

    <h1>Create Post</h1>

    {!! Form::open(["method"=>"POST", "action"=>"App\Http\Controllers\PostsController@store", 'files'=>true])!!}
    

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

    {!!Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
    {!! Form::close() !!}

    @if($errors->any()) 
        
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
    @endif
@endsection