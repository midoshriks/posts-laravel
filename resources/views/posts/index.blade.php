@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Posts</h1>
    @if(count($posts) > 0)
    @foreach($posts as $post)
    <div class="card card-body bg-ligh">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="/storage/cover_image/{{$post->cover_image}}" alt="img=post" style="width: 50%;">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <!-- <h6>{{$post->body}}</h6> -->
                <small>written on {{$post->email}}</small>
                <small>written on {{$post->created_at}} <span>by {{$post->user->name}}</span> </small>
            </div>
        </div>

    </div>
    @endforeach

    {{$posts->links('pagination::bootstrap-4')}}
    @else
    <p>Not posts found </p>
    @endif
</div>



<!-- <div class="table-responsive">
<table class="table table-striped table-hover" style="width: 100%">
    <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th>body</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $k=> $post)
        <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div> -->


@endsection
