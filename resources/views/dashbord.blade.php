@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a class="btn btn-success" href="/posts/create">Create Post</a>
                    <h3>You Blog Postst</h3>

                    @if(count($posts) > 0 )
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($posts as $k => $post)
                            <tr>
                                <td>{{$k + 1}}</td>
                                <td><a href="posts/{{$post->id}}">{{$post->title}}</a></td>
                                <td>{{$post->email}}</td>
                                <td>
                                    {!! Form::open(['action' =>['App\Http\Controllers\PostsController@destroy', $post->id],'method' => 'POST', 'class' => 'pull-right']) !!}
                                    <!-- btn Edit -->
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
                                    <!-- btn Edit -->

                                    {{ Form::hidden('_method','DELETE') }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h3>You have no Posts</h3>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
