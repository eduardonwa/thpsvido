<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PlayVideosController extends Controller
{
/*     public function keywordSearch($keyword)
    {   
        $keywordVideos = Http::get('http://thvid-api.herokuapp.com/videos/keyword/'. $keyword)->json();
        
        $keywordVideo = $keywordVideos[0];

        return view ('videos.keyword', compact('keywordVideo'));
    } */

    public function thps2($id)
    {   
        $id++;
        
        $thps2Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS2/'. $id .'/1')->json();
        
        $thps2Video = $thps2Videos[0];

        return view ('videos.thps2', compact('thps2Video'));
    }

    public function thps3($id)
    {   
        $id++;
        
        $thps3Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS3/'. $id .'/1')->json();
        
        $thps3Video = $thps3Videos[0];

        return view ('videos.thps3', compact('thps3Video'));
    }

    public function thps4($id)
    {   
        $id++;
        
        $thps4Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS4/'. $id .'/1')->json();
        
        $thps4Video = $thps4Videos[0];

        return view ('videos.thps4', compact('thps4Video'));
    }

    public function thug($id)
    {
        $id++;

        $thugVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/THUG/'. $id . '/1')->json();
    
        $thugVideo = $thugVideos[0];
        
        return view ('videos.thug', compact('thugVideo'));
    }

    public function thug2($id)
    {
        $id++;

        $thug2Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THUG2/'. $id . '/1')->json();
    
        $thug2Video = $thug2Videos[0];
        
        return view ('videos.thug2', compact('thug2Video'));
    }

    public function thaw($id)
    {
        $id++;

        $thawVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/THAW/'. $id . '/1')->json();
    
        $thawVideo = $thawVideos[0];
        
        return view ('videos.thaw', compact('thawVideo'));
    }

    public function thp8($id)
    {
        $id++;

        $thp8Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/THP8/'. $id . '/1')->json();
    
        $thp8Video = $thp8Videos[0];
        
        return view ('videos.thp8', compact('thp8Video'));
    }

    public function thpg($id)
    {
        $id++;

        $thpgVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/THPG/'. $id . '/1')->json();
    
        $thpgVideo = $thpgVideos[0];
        
        return view ('videos.thpg', compact('thpgVideo'));
    }

    public function thps1Plus2($id)
    {
        $id++;

        $thps1plus2Videos = Http::get('http://thvid-api.herokuapp.com/videos/game/thps1plus2/'. $id . '/1')->json();
    
        $thps1plus2Video = $thps1plus2Videos[0];
        
        return view ('videos.thps1plus2', compact('thps1plus2Video'));
    }

    public function thugPro($id)
    {
        $id++;

        $thugProVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/thug pro/'. $id . '/1')->json();
    
        $thugProVideo = $thugProVideos[0];
        
        return view ('videos.thugpro', compact('thugProVideo'));
    }

}
