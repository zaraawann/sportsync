<?php

// app/Http/Controllers/UserController.php
// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}