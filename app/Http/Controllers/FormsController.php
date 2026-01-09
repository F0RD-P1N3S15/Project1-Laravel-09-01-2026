<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;

class FormsController extends Controller
{
    public function index(Request $request)
    {
        $forms = Forms::orderBy('email', 'desc')->get();

        return view('forms.index', compact('forms'));
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
        'email' => 'required|email',
    ]);

    Forms::create($data);

    return redirect()->back()->with('Success', 'Your message has been sent !');
}
}
