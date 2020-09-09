@extends('layouts.app')
@section('content')

<form method="POST" action="{{route('posts.store')}}">
    @csrf
  <div class="form-group">
    <label ><b>Title</b></label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label><b>Description</b></label>
    <textarea name="description"  class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label><b>Description</b></label>
    <select class="form-control" name="user_id">
    @foreach($users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
    </select>
  </div>
  
  <button type="submit" class="btn btn-success">Create</button>
</form>


@endsection