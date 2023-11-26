<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // fetch all posts
        $all_post = Post::all();
        $all_user = User::all();

        return view('home', [
            'user' => $user,
            'users' => $all_user,
            'posts' => $all_post
        ]);
    }
}
