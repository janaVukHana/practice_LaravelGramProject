@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-8">
            {{-- <img height="200" width="200" src="{{$post->image}}" alt="" class="w-100"> --}}
            <img src="{{asset($post->image)}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <h3>Username: {{$post->user->username}}</h3>
            <p>Caption: {{$post->caption}}</p>
        </div>
    </div>
    


</div>
@endsection
