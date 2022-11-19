<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user) {
        $user = User::findOrFail($user);
        // $posts = auth()->user()->posts->orderBy('id','desc');
        $posts = auth()->user()->posts;
        

        return view('profiles.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
