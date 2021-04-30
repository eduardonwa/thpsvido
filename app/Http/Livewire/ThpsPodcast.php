<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ThpsPodcast extends Component
{   
    public $episodes = [];
    public $page = 5;
    
    public function mount()
    {
        $this->currentSeason();
    }

    public function currentSeason()
    {
        $podcastSeason = Http::get('http://thvid-api.herokuapp.com/videos/game/podcast/'. $this->page .'/10')->json();
        $this->episodes = collect($podcastSeason);
    }

    public function updatedPage()
    {
          $this->currentSeason();
    }
    
    public function render()
    {
        return view('livewire.thps-podcast')
            ->layout('channels.thps-podcast');
    }
}