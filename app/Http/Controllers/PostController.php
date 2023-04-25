<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index', 'show', 'home']]);
    }

    public function home()
    {
        $users = User::all();

        

        return view('welcome', ['users' => $users]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.posts', ['posts' => $posts]);

    }
    
    public function create()
    {       
        return view('posts.create', ['post' => new Post]);
    }
    
    public function store(SavePostRequest $request){
        
        

        Post::create($request->validated());        

        return to_route('principal')->with('status', 'Post Created!!!');
    }

                    // Type Hints
    public function show(Post $post)
    {        
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        //return $post;
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
       
        $post->update($request->validated());

        return to_route('post.show', $post)->with('status', 'Post Edited!!!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route("post")->with('status', 'Post Deleted!!!');
    }
}
