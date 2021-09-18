@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Create Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("title", "Title",['class' => 'col-md-3']) }}
            {{ Form::text('title', '',['class' => 'form-control', 'id' =>  "title", 'placeholder'=>"Title" ,"required" ]) }}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("email", "Email",['class' => 'col-md-3']) }}
            {{ Form::text('email', '',['class' => 'form-control', 'id' =>  "article-ckeditor", 'placeholder'=>"Email" ,"required" ]) }}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("body", "Body",['class' => 'col-md-3']) }}
            {{ Form::textarea('body', '',['class' => 'form-control', 'id' =>  "body", 'placeholder'=>"Body Text" ,"required"])}}
        </div>
    </div>

    <div class="col-md-10">
        <div class="form-grop">
            {{ Form::label("file", "File",['class' => 'col-md-3']) }}
            {{ Form::file('cover_image',['class' => 'form-control']) }}
        </div>
    </div>



    <div class="col-md-10 mt-3 text-lg-right">
        <div class="form-grop">
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        <a class="btn btn-primary" href="/posts">Go Back</a>
        </div>
    </div>
    {!! Form::close() !!}
</div>



<!-- <div class="col-md-10">
        <div class="form-group">
            {{ Form::text("en_name", '' , ['class' => 'form-control' , 'id' =>  "en_name", 'placeholder'=>"En Name ","required"]) }}
            <div class="invalid-tooltip">
                Name is Required
            </div>
        </div>
    </div> -->


@endsection
