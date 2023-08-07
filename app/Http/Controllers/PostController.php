<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('backend.post.post_list', compact('posts'));
    }
    public function create_post()
    {
        return view('backend.post.create_post');
    }
    public function store(Request $request)
    {
        try {
            Post::create($request->all());
            return  redirect()->route('post_list')->withMessage('Post Created Successfully');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
