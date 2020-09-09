@extends('layouts.app')
@section('content')

<a href="{{route('posts.create')}}" class="btn btn-success mb-3">Created Post</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Posted By</th>
        <th scope="col">Created At</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Posts as $post)
            <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->Title}}</td>
            <td>{{$post->user ? $post->user->name : 'User Not Found'}}</td>
            <!-- <td>{{$post->user_id}}</td> -->
            <td>{{$post->created_at->format('y-m-d')}}</td>
            <td>
                <!-- <a href="/posts/{{$post->id}}" class="btn btn-success">View</a> -->
                 <!--  <a href="{{route('posts.show', $post->id)}}" class="btn btn-success">View</a>       Another Way To Pass Id To Get Page Of view-->                        
                <a href="{{ route('posts.show', ['Post'=> $post->id] )}}" class="btn btn-success">View</a>  <!-- Another Way To Pass Id To Get Page Of view-->
                <a href="{{ route('posts.edit', ['Post' => $post->id] )}}" class="btn btn-primary">Edit</a>
                <form style="display:inline" method="POST"action="{{route('posts.destory', ['Post' => $post->id] )}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </tr>
        @endforeach                
    </tbody>
    </table>
@endsection
