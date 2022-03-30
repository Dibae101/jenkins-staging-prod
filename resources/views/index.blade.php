@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Forum App</h1>
        <p class="lead">
            This is a simple web application developed with Laravel PHP Framework. <br>
            It is made for educational purpose at <a href="https://daredevops.com">Dare DevOps</a>
        </p>
    <a class="btn btn-lg btn-primary" href="{{route('posts.index')}}" role="button">Browse Posts &raquo;</a>
    </div>
</div>
@endsection
