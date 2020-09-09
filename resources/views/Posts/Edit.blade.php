@extends('layouts.app')
@section('content')

<form method="POST" action="{{route('posts.update',['Post'=> $post->id])}}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label ><b>Title</b></label>
    <input name="title" type="text" value="{{$post->Title}}" class="form-control">
  </div>
  <div class="form-group">
    <label><b>Description</b></label>
    <textarea name="description" class="form-control" >{{$post->description}}"</textarea>
  </div>
  <div class="form-group">
    <label><b>Description</b></label>
    <select class="form-control" name="user_id">
    @foreach($users as $user)
      <option value="{{$user->id}}" @if($user->id==$post->user_id) selected @endif>{{$user->name}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection