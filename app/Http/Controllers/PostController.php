<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('post.create');
    }

    public function store() {

        $data = request()->validate([
            // 'user_id' => '',
            'caption' => 'required|min:6',
            'image' => 'required|image'
        ]);

        // store image in storage
        $image = request('image')->store('uploads', 'public');

        // resizing image :: first composer require intervention/image and import class like at the top
        $img = Image::make(public_path('storage/'.$image))->fit(1200,1200);
        $img->save();

        // prepare image to put in database
        $data['image'] = 'storage/'.$image;

        // WHAT IS HAPPENING HERE ???
        // posts() gives me warning but everything is working like it should???????????????
        auth()->user()->posts()->create($data);

        return redirect('/profiles/' . auth()->user()->id);
    }

    public function show(Post $post) {

        return view('post.show', ['post' => $post]);
        // another way
        // return view('post.show', compact('post'));
    }
}
