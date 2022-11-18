@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-3 bg-secondary p-5">
                <img class="rounded-circle" src="{{asset('images/freeCodeCamp.jpg')}}" alt="logo">
        </div>
        <div class="col-9 bg-info pt-5">
            {{-- <div><h1>freecodecamp</h1></div> --}}
            {{-- Before you display user name you can maybe try to manipulate database ... with  --}}
            {{-- <div><h1>{{Auth::user()->username}}</h1></div> --}}
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a class="btn btn-primary" href="/post/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>505</strong> posts</div>
                <div class="pe-5"><strong>118</strong> followers</div>
                <div class="pe-5"><strong>390</strong> following</div>
            </div>
            <div class="fw-bold mt-3">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}" target="_blank" class="text-decoration-none text-primary fw-bold">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" src="{{asset('images/first_image.jpg')}}" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{asset('images/second_image.jpg')}}" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="{{asset('images/third_image.jpg')}}" alt="">
        </div>
    </div>

</div>
@endsection
