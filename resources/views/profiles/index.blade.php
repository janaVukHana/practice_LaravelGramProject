@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-3 bg-secondary p-5">
                <img class="w-100 rounded-circle" src="{{$user->profile->image ? asset($user->profile->image) : asset('images/freeCodeCamp.jpg')}}" alt="logo">
        </div>
        <div class="col-9 bg-info pt-5">
            {{-- <div><h1>freecodecamp</h1></div> --}}
            {{-- Before you display user name you can maybe try to manipulate database ... with  --}}
            {{-- <div><h1>{{Auth::user()->username}}</h1></div> --}}
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <h1>{{$user->username}}</h1>
                    <div><button class="btn btn-primary ms-3">Follow</button></div>
                </div>
                @can('update', $user->profile)
                    <a class="btn btn-primary" href="/post/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <div><a class="text-decoration-none" href="/profiles/{{$user->id}}/edit">Edit Profile</a></div>
            @endcan
            <div class="d-flex">
                {{-- first solution --}}
                {{-- <div class="pe-5"><strong>{{count($posts)}}</strong> posts</div> --}}
                {{-- second solution --}}
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-5"><strong>118</strong> followers</div>
                <div class="pe-5"><strong>390</strong> following</div>
            </div>
            <div class="fw-bold mt-3">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            
            <div><a href="{{$user->profile->url}}" class="text-decoration-none text-primary fw-bold">{{$user->profile->url ?? 'Update your profile and give me your url'}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($posts as $post)
            <div class="col-4 mb-4">
                <a href="/post/{{$post->id}}"><img src="{{asset($post->image)}}" alt="{{$post->caption}}" class="w-100"></a>
            </div>
        @endforeach
    </div>

</div>
<p>some text</p>
@endsection
