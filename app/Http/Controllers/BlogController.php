<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();
        return view('blog', compact('posts'));
    }

    public function show($slug = null)
    {
        if (empty($slug)) {
            // Default fallback
            $post = Post::where('status', 'published')->orderBy('created_at', 'desc')->first();
        } else {
            $post = Post::where('slug', $slug)->where('status', 'published')->firstOrFail();
        }

        $recentPosts = Post::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('blog-details', compact('post', 'recentPosts'));
    }
}
