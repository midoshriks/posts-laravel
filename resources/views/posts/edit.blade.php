@extends('layouts.app')

@section('content')


<div class="container">
<h1>Upadte Post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id],'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("title", "Title",['class' => 'col-md-3']) }}
            {{ Form::text('title', $post->title ,['class' => 'form-control', 'id' =>  "title", 'placeholder'=>"Title" ,"required" ]) }}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("email", "Email",['class' => 'col-md-3']) }}
            {{ Form::text('email', $post->email,['class' => 'form-control', 'id' =>  "article-ckeditor", 'placeholder'=>"Email" ,"required" ]) }}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("body", "Body",['class' => 'col-md-3']) }}
            {{ Form::textarea('body', $post->body ,['class' => 'form-control', 'id' =>  "body", 'placeholder'=>"Body Text" ,"required"])}}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("file", "File",['class' => 'col-md-3']) }}
            {{ Form::file('cover_image') }}
        </div>
    </div>

    <!-- this constrectr  -->
    {{ Form::hidden('_method','PUT') }}
    <div class="col-md-10">
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        <a class="btn btn-primary" href="/posts">Go Back</a>
    </div>
{!! Form::close() !!}
</div>

@endsection
