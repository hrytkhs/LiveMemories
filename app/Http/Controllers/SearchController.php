<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('artist', 'like', "%{$request->search}%")
        ->orWhere('title', 'like', "%{$request->search}%")
        ->orWhere('body', 'like', "%{$request->search}%")
        ->orderBy('updated_at', 'desc')
        ->paginate(5);

        $search_result = ' " '.($request->search).' " '.'の検索結果 '.$posts->total().' 件 ';

        $search_query = $request->search;

        return view('posts.index', compact('posts','search_result','search_query'));
    }
}
