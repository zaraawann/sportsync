<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Get all users except the authenticated user
        $users = User::where('id', '!=', Auth::id())->get();

        return view('home', compact('users'));
    }
}