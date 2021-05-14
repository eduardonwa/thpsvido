<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thps3 extends Component
{
    public $thps3Results = [];

    public function loadTHPS3()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/THPS3/1/21')->json();
        $this->thps3Results = collect($response);
    }

    public function render()
    {
        return view('livewire.thps3');
    }
}
