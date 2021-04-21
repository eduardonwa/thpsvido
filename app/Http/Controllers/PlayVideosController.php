<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PlayVideosController extends Controller
{
    
    public function gameWatch(string $slug, int $id) 
    {
        $id++;

        $game = strtoupper($slug);

        $videos = Http::get('http://thvid-api.herokuapp.com/videos/game/'. $game . '/' .$id . '/1')->json();

        $gameVideo = $videos[0];

        return view ('videos.' . $slug, compact('gameVideo'));
    }

    public function keyword($id)
    {
        $keywordVideo = Http::get('http://thvid-api.herokuapp.com/videos/'. $id)->json();
                
        return view ('videos.keyword', compact('keywordVideo'));
    }

}
