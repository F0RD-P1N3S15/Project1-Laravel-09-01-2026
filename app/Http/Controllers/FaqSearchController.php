<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $faqs = collect();

        if ($query) {
            $faqs = FAQ::query()
                ->where('title', 'like', "%{$query}%")
                ->get();
        }

        return view('faq.searchfaq', compact('faqs', 'query'));
    }

    public function show(FAQ $faq)
    {
        return view('faq.showfaq', compact('faq'));
    }
}
