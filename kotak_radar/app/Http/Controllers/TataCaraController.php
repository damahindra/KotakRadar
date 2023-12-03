<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TataCaraController extends Controller
{
    public function index($pict) {
        $user = auth()->user();
        return view('tataCara', [
            'user' => $user,
            'picture' => $pict
        ]);
    }
}
