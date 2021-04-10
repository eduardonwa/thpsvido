<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thugs extends Component
{
    public $thugsResults = [];

    public function loadTHUGS()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/THUG/1/21')->json();
        $this->thugsResults = collect($response);
    }

    public function render()
    {
        return view('livewire.thugs');
    }
}
