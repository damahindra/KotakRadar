<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KotakSuratController extends Controller
{
    // show all mails
    public function openMail() {
        return view('kotakSurat');
    }

    // show view to post mail
    public function addMailForm() {
        return view('tambahSurat');
    }

    // post mail
    public function postMail(MailRequest $request) {

        Post::create($request->validated());
    
        // User is not authenticated, handle accordingly (e.g., redirect to login)
        return redirect('/mail');
    }

    public function fetch() {
        $posts = Post::all();
        return view('kotakSurat', ['posts' => $posts]);
    }
}
