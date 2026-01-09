<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        $users = collect();

        if ($query) {
            $users = User::query()
                ->where('name', 'like', "%{$query}%")
                ->get();
        }

        return view('users.searchuser', compact('users', 'query'));
    }

    public function show(User $user)
    {
        return view('users.showuser', compact('user'));
    }
}