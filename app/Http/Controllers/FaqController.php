<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = FAQ::with('category')->orderBy('id')->get();

        return view('faq.index', compact('faqs'));
    }
}
