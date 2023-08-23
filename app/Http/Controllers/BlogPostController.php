<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //

        return view('posts.index', ['posts' => BlogPost::all()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new BlogPost instance
        $post = new BlogPost();
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $user->blogPosts()->save($post);

        // Redirect to the newly created post's show page
        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $post = BlogPost::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = auth()->user();
        $post = BlogPost::findOrFail($id);

        if($user->id !==$post->user_id){
            // abort(403,'Unauthorized action.');
            session()->flash('error', 'You are not authorized to update this post.');
            // Redirect back to the referring page or any other page
            return redirect()->back();
        }
        return view('posts.edit', ['post' => BlogPost::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = auth()->user();
        $post = BlogPost::findOrFail($id);

        if($user->id !==$post->user_id){
            abort(403,'Unauthorized action.');

        }

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        $post->fill($validated);
        // $user->blogPosts()->save($post);

        $post->save();
        session()->flash('success', 'Post updated successfully.');

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = auth()->user();
        $post = BlogPost::findOrFail($id);
        if($user->id !==$post->user_id){
            // abort(403,'Unauthorized action.');
            session()->flash('error', 'You are not authorized to update this post.');
            // Redirect back to the referring page or any other page
            return redirect()->back();
        }


        $post->delete();
        session()->flash('status', 'Blog post was deleted !');

        return redirect()->route('posts.index');
    }
}
