<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

/**
 * Post 
 */
class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // data 
        $posts = Post::all()->paginate(8);
        
        // pages for pagination 
        $nb_pages = $posts->lastPage();
        
        // render 
        return view(
            'post.index', [
                'posts' => $posts, 
                'nb_pages' => $nb_pages, 
            ]
        );
    }

    /**
     * Display a listing of the resource by user.
     *
     * @return \Illuminate\Http\Response
     */
    public function myPosts() {
        // data 
        $user = User::find(Auth::id());
        $stu = $user->student;
        $posts = Post::whereBelongsTo($stu)->get();
        
        // render 
        return view(
            'post.byuser', [
                'posts' => $posts, 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // render 
        return view(
            'post.create', 
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // validate 
        $request->validate( [
            'title' => 'required|min:2|max:100', 
            'title_en' => 'required|min:2|max:100', 
            'body' => 'required', 
            'body_en' => 'required', 
            'sommary' => 'required|max:200', 
            'sommary_en' => 'required|max:200', 
        ] );
        
        // format 
        $post = new Post;
        $post->fill($request->all());
        $post->student_id = Auth::id();
        
        // save 
        $post->save();
        
        // redirect 
        return redirect(
            route('post.show', $post->id)
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
        // render 
        return view(
            'post.show', [
                'post' => $post, 
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
        // render 
        return view(
            'post.edit', [
                'post' => $post, 
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {
        // validate 
        $request->validate( [
            Rule::unique('posts')->ignore($request->id, 'id'), 
            'title' => 'required|min:2|max:100', 
            'title_en' => 'required|min:2|max:100', 
            'body' => 'required', 
            'body_en' => 'required', 
            'sommary' => 'required|max:200', 
            'sommary_en' => 'required|max:200', 
        ] );
        
        // format 
        $post->fill($request->all());
        
        // save 
        $post->save();
        
        // redirect 
        return redirect(
            route('post.show', $post->id)
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {
        // delete 
        $post->delete();
        
        // redirect 
        return redirect(
            route('post')
        );
    }
}
