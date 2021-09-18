@extends('layouts.app')

@section('content')
<div class="col-md-10 mt-3 text-lg-right">
        <div class="form-grop">
        {{ Form::submit('submit', ['class' => 'btn btn-primary']) }}
        <a class="btn btn-primary" href="/posts">Go Back</a>
        </div>
    </div>
@endsection

