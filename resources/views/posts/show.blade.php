@extends('layouts.app')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="text-center">
                        <img src="/storage/cover_image/{{$post->cover_image}}" alt="img=post" style="width: 40%; height:400px; ">
                    </div>
                    <title>Title:{{$post->title}}</title>

                    <div class="card-body">
                        <div class="text-center ">
                            <p class="card-text">
                                "
                                {{$post->body}}
                                "
                            </p>
                        </div>
                        @if(!Auth::guest())

                        @if(Auth::user()->id == $post->user_id)

                        <div class="d-flex justify-content-between align-items-center">
                            {!! Form::open(['action' =>['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
                            <div class="btn-group">
                                {{ Form::hidden('_method','DELETE') }}
                                {{ Form::submit('مسح', ['class' => 'btn btn-sm btn-outline-secondary']) }}
                                {!! Form::close() !!}
                                <a href="/posts/{{$post->id}}/edit"><button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button></a>
                            </div>
                            <small class="text-muted">{{$post->created_at}} دقائق</small>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <h1>Title:{{$post->title}}</h1>
    <div class="">
        <a class="btn btn-primary" href="/posts">Go Back</a>
        <h5>It's body Message :</h5>
    </div>

    <div class="row text-center">
        <div class="col-md-4 col-sm-4 text-center">
            <img src="/storage/cover_image/{{$post->cover_image}}" alt="img=post" style="width: 70%;">
        </div>
    </div>

    <div class="card card-body bg-ligh">
        <div class="text-center ">
            "
            {{$post->body}}
            "
        </div>
        <small>written on {{$post->created_at}} <span>by {{$post->user->name}}</span> </small>
    </div>


    @if(!Auth::guest())

    @if(Auth::user()->id == $post->user_id)
    <div class="info">
        <small>written on {{$post->email}}</small>
        <a href="/send-mail/{{$post->email}}" class="btn btn-success">Send Message</a>

        <!-- Form Delete -->
        {!! Form::open(['action' =>['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
        <!-- btn Edit -->
        <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
        <!-- btn Edit -->

        <!-- btn Delete -->
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>
    @endif
    @endif
</div>


@endsection
