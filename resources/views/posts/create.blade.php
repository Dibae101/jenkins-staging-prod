@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <h4 class="text-center">Create A Post</h4>
          <hr>
      <form action="{{route('posts.store')}}" method="POST">
        @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" required class="form-control" id="exampleFormControlInput1" placeholder="Title of you post here..">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Post Content</label>
                <textarea class="form-control" required id="exampleFormControlTextarea1" rows="8" name="body"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Submit The Post">
            </div>
            </form>
      </div>
  </div>
</div>
@endsection
