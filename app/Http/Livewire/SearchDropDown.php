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

        $keywordResponse = Http::get('http://thvid-api.herokuapp.com/videos/keyword/'.$this->search.'/1/50')->json();
        
        foreach($keywordResponse as $key => $keyword) {
            $keywordResponse[$key]['localUrl'] = 'videos/keyword/' . $keyword['_id'];
        }
        
        $this->searchResults = array_merge($keywordResponse);
    }

    public function render()
    {
        return view('livewire.search-drop-down');
    }
}