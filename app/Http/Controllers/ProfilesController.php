<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    // another way for pasing data to view is with compact fn
    public function edit(User $user) {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required|min:12',
            'url' => 'required|url'
        ]);

        if(request('image')) {
            // store image in storage
            $image = request('image')->store('uploads', 'public');

            // resizing image :: first composer require intervention/image and import class like at the top
            $img = Image::make(public_path('storage/'.$image))->fit(1200,1200);
            $img->save();

            // prepare image to put in database
            $data['image'] = 'storage/'.$image;
        }

        // one way: auth()->user()->profile->update($data);
        $user->profile->update($data);

        return redirect('/profiles/' . $user->id);
    }
}
