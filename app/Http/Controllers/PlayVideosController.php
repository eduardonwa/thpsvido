<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlayVideosController extends Controller
{
    public function thps4($id)
    {
        $id++;
        $thps4Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS4/$id/1')->json();
    
        $thps4Video = $thps4Videos[0]; // get the first one 
    
        return view ('videos.thps4', compact('thps4Video'));
    }

    public function thug($id)
    {
        $thugVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/THUG/$id/1')->json();
    
        $thugVideo = $thugVideos[0]; // get the first one 

        return view ('videos.thug', compact('thugVideo'));
    }
}
