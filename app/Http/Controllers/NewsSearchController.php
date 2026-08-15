<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $news = collect();

        if ($query) {
            $news = News::query()
                ->where('title', 'like', "%{$query}%")
                ->get();
        }

        return view('news.searchnews', compact('news', 'query'));
    }

    public function show(News $news)
    {
        return view('news.shownews', compact('news'));
    }
}
