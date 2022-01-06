<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function posts()
    {
        $posts = Post::all();

        return view('posts.posts', ['posts' => $posts]);
    }


    public function create(){
        $data = [];
        $data['title'] = "Create post";
        $data['posts'] = Post::all();

        return view('posts.create')->with("data", $data);
    }

    public function save(Request $request){

        $request->validate([
           "title" => "required|unique:posts",
           "content" => "required"
        ]);
        
        Post::create($request->only(["title", "content"]));

        return back()->with('success','Post created successfully!');
    }

    public function delete(Request $request){

        Post::where('title', $request->title)->delete();

        return back()->with('success','Post deleted successfully!');
    }

}