<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comments;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required',
            'content' => 'required',
        ]);

        $post_id = $request->input('post_id');
        $user_id = $request->input('user_id');
        Comments::create([
            'post_id' => $post_id,
            'user_id' => $user_id,
            'content' => $request->input('content'),
        ]);
        return redirect()->back();
    }
}
