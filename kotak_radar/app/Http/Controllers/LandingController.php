<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index () {
        $user = auth()->user();
        return view('landing', [
            'user' => $user
        ]);
    }
}
