<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayVideosController extends Controller
{
    public function show()
    {
        return view ('videos.show');
    }
}
