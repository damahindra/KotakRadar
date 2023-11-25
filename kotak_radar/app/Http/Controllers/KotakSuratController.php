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

        // define current user
        $user = auth()->user();
        $val_post = $request->validated();
        // create post
        $post = Post::create([
            'user_id' => $user->id,
            'recipient' => $request['recipient'],
            'topic' => $request['topic'],
            'content' => $request['content'],
        ]);
        
        // // associate post with user
        // $post->user()->associate($user);

        // // save post to user
        // $user->post()->save($post);

        return redirect('/mail');
    }

    public function fetch() {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('kotakSurat', ['posts' => $posts]);
    }
}
