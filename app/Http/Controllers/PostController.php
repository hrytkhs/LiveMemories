<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Venue;

class PostController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth')->except(['index', 'show']);
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest('created_at')->paginate(4);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venue = Venue::select('id','name')->get();
        return view('posts.create', compact('venue'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->artist = $request->artist;
        $post->title = $request->title;
        $post->date = $request->date;
        $post->venue_id = $request->venue_id;
        $post->body = $request->body;
        $post->user_id = $request->user()->id;
        $post->save();
        return redirect('posts/'.$post->id)
        ->with('message', '記事を投稿しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Venue $venue)
    {
        $venue_id = $post->venue_id;
        $venue_item = Venue::find($venue_id);
        return view('posts.show', compact('post','venue','venue_id','venue_item'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @param  \App\Venue  $venue
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, Venue $venue)
    {
        $venue_id = $post->venue_id;
        $venue_item = Venue::find($venue_id);

        $venue_items = Venue::select('id','name')->get();
        return view('posts.edit', compact('post','venue','venue_item','venue_items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->artist = $request->artist;
        $post->title = $request->title;
        $post->date = $request->date;
        $post->venue_id = $request->venue_id;
        $post->body = $request->body;
        $post->save();
        return redirect('posts/' . $post->id)
        ->with('message', '記事を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts')
        ->with('message', '記事を削除しました');
    }
}
