@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @forelse ($posts as $post)
        <div class="col-md-4">
        <h2>{{$post->title}}</h2> <br>
        <h5>Posted by <strong>{{$post->user->name}}</strong></h5>

            <p class="card-text">{!!Str::limit($post->body, 150)!!}</p>

          <p>
            <a class="btn btn-primary" href="{{route('posts.show', $post)}}" role="button">View details &raquo;</a>
          </p>
        </div>
        @empty
        No Posts Yet click &nbsp; <a href="{{route('posts.create')}}">here</a> &nbsp; to create one
        @endforelse

      </div>
</div>

@stop
