@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card mt-3">
                <div class="card-header">
                    {{$post->user->name}}
                </div>
                <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{!! $post->body !!}</p>
             @if(auth()->user() == $post->user)
             <p>
                <a href="{{route('posts.edit', $post)}}" class="btn btn-info btn-sm btn-block text-white">Edit</a>
                    <span>
                        <form action="{{route('posts.destroy', $post)}}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm btn-block"
                            onclick="return confirm('You can not recover deleted posts. Are you sure you want to delete this post?');">Delete</button>
                            </form>
                    </span>
                </p>
                @endif
                </div>
                </div>
        </div>
    </div>
</div>

@stop
