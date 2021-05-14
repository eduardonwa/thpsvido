<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thug2 extends Component
{
    public $thug2Results = [];

    public function loadTHUG2()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/THUG2/1/21')->json();
        $this->thug2Results = collect($response);
    }

    public function render()
    {
        return view('livewire.thug2');
    }
}
