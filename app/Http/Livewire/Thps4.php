<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thps4 extends Component
{
    public $thps4Results = [];

    public function loadTHPS4()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS4/1/21')->json();
        $this->thps4Results = collect($response);
    }

    public function render()
    {
        return view('livewire.thps4');
    }
}