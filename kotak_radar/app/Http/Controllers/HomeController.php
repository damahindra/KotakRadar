<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // fetch all posts
        $all_post = Post::orderBy('created_at', 'desc')->get();
        $all_user = User::all();

        return view('home', [
            'user' => $user,
            'users' => $all_user,
            'posts' => $all_post
        ]);
    }

    // show selected mail
    public function showDetails(User $user, Post $post) {
        $comments = Comments::where('post_id', $post->id)->orderBy('created_at', 'desc')->get();
        return view('detailSurat', compact('user', 'post', 'comments'));
    }

    // filter by topic
    public function filterByTopic($topic) {
        $user = auth()->user();
        // fetch all posts
        $all_user = User::all();
        $filtered = Post::where('topic', $topic)->orderBy('created_at', 'desc')->get();
        return view('home', [
            'user' => $user,
            'users' => $all_user,
            'posts' => $filtered
        ]);
    }
}
