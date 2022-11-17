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
            <div><h1>{{Auth::user()->username}}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>505</strong> posts</div>
                <div class="pe-5"><strong>118</strong> followers</div>
                <div class="pe-5"><strong>390</strong> following</div>
            </div>
            <div class="fw-bold mt-3">freecodecamp.org</div>
            <div>
                We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/
            </div>
            <div><a href="#" class="text-decoration-none text-primary fw-bold">www.freecodecamp.org</a></div>
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
