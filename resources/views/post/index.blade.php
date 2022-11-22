@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-4 offset-4">
                    <a href="/post/{{$post->id}}"><img src="{{asset($post->image)}}" alt="{{$post->caption}}" class="w-100"></a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4 offset-4">
                    <div>{{$post->user->username}}</div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- I think it showing tailwind pagination. Not good. Can change to bootstrap pagination --}}
    <div class="row mt-5">{{$posts->links()}}</div>
    
</div>
@endsection