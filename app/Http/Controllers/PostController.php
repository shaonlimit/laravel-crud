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
    public function edit($id)
    {
        $post =  Post::find($id);
        return view('backend.post.edit_post', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update([

            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('post_list');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post_list')->with('delete_message', 'Post deleted');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('backend.post.post_info', compact('post'));
    }
}
