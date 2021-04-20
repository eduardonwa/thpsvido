<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropDown extends Component
{
    public $search;
    public $searchResults = [];
    
    public function updatedSearch($newValue)
    {
        if(strlen($this->search) < 3) {
            $this->searchResults = [];
            return;
        }

        $gameResponse = Http::get('http://thvid-api.herokuapp.com/videos/game/'.$this->search.'/1/21')->json();
        
        foreach($gameResponse as $key => $game) {
            $gameResponse[$key]['localUrl'] = 'videos/'.preg_replace('/\s+/', '', strtolower($this->search)).'/'.$key;
        }

        $keywordResponse = Http::get('http://thvid-api.herokuapp.com/videos/keyword/'.$this->search.'/1/21')->json();
        
        foreach($keywordResponse as $key => $keyword) {
            $keywordResponse[$key]['localUrl'] = 'videos/keyword/'.preg_replace('/\s+/', '', strtolower($this->search)).'/'.$key;
        }
        
        $this->searchResults = array_merge($gameResponse, $keywordResponse);
    }

    public function render()
    {
        return view('livewire.search-drop-down');
    }
}