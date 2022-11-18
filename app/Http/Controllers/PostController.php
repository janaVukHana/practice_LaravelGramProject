<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store() {

        $data = request()->validate([
            'user_id' => '',
            'caption' => 'required|min:12',
            'image' => 'required|image'
        ]);

        // posts() gives me warning but everything is working like it should???????????????
        auth()->user()->posts()->create($data);

        return back();
    }
}
