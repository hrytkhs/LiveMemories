<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class SearchController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where([
            ['artist', 'ilike', "%{$request->search}%", 'or'],
            ['title', 'ilike', "%{$request->search}%", 'or'],
            ['body', 'ilike', "%{$request->search}%", 'or']
            ])
        ->orWhereHas('user', function($query) use($request){
            $query->where('name', 'ilike', "%{$request->search}%");
            })
        ->orderBy('created_at', 'desc')
        ->paginate(4);

        $search_result = ' " '.($request->search).' " '.'の検索結果 '.$posts->total().' 件 ';

        $search_query = $request->search;

        return view('posts.index', compact('posts','search_result','search_query'));
    }
}
