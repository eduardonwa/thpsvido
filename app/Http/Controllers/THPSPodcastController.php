<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class THPSPodcastController extends Controller
{
    public function index()
    {
        $podcastS1 = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/5/10')->json();
        $podcastS2 = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/4/10')->json();
        $podcastS3 = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/3/10')->json();
        $podcastS4 = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/2/10')->json();
        $podcastS5 = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/1/10')->json();

        return view('videos.channels.thps-podcast', compact(
            'podcastS1', 'podcastS2', 'podcastS3', 'podcastS4', 'podcastS5')
        );
    }
}
