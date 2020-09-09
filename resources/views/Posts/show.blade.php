@extends('layouts.app')
@section('content')
        <div class="card">
        <div class="card-header">
            Persone Info
        </div>
        <div class="card-body">
        <h5 class="card-title"><b> ID:-<b/> {{$post->id}}</h5>        
            <h5 class="card-title"><b> Title:-<b/>{{$post->Title}}</h5>
            <h5 class="card-title"><b> Description:-<b/>{{$post->description}}</h5>
        </div>
        </div>
@endsection