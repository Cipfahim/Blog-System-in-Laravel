<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return view('posts',compact('posts'));
    }
    public function details($slug)
    {
        $post = Post::where('slug',$slug)->first();

        $blogKey = 'blog_' . $post->id;

        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomposts = Post::all()->random(3);
        return view('post',compact('post','randomposts'));

    }
}
