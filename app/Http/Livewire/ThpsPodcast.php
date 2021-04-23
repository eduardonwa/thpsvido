<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ThpsPodcast extends Component
{
    public $season;

    protected $listeners = ['selectSeason' => 'showEpisodes'];

    public function showEpisodes()
    {
        $this->season = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/5/10')->json();
    }

/*     public function seasonList()
    {
        $podcastVideos = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/'. $this->season .'/10')->json();
    } */
    
    public function render()
    {
        return view('livewire.thps-podcast');
    }
}
