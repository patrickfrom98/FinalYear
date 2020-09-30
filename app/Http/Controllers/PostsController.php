<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class PostsController extends Controller
{
    public function show($slug) {
        /*
        $posts = [
            'my-first-post' => 'Hello! This is my first blog post',
            'my-second-post' => 'Now I am getting the hang of this blogging thing'
        ];
        */

        /*
        if (! array_key_exists($slug, $posts)) {
            abort(404, 'Sorry that post was not found');
        }
        */

        $post = Posts::where('slug', $slug)->firstOrFail();
        //dd($post);

        return view('post', [
            'post' => $post
        ]);
    }
}
