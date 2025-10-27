<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::all();
        return view('Post',['posts'=> $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $infos=$request->validate([
        'title'=>'required',
        'author'=>'required',
        'content'=>'required',
        'status'=>'required',
        ]);
        Post::create($infos);
        
        return redirect('Post');
    }

    /**
     * Display the specified resource.
     */
    public function create()
    {
        return view('AddPost');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function apiIndex()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function apiShow($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }


    public function apiStore(Request $request)
    {
        $post = Post::create($request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
            'status' => 'required',
        ]));

        return response()->json($post,201);
    }

    public function apiUpdate(Request $request, $id)

    {

    $post = Post::find($id);

    $post->update([
        'title' => $request->title,
        'author' => $request->author,
        'content' => $request->content,
        'status' => $request->status,
    ]);

    return response()->json($post);
    }

    public function apiDelete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json(['message' => 'Post deleted successfully']);
    }

    }
