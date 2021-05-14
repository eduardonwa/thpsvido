<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thps1Plus2 extends Component
{
    public $thps1plus2Results = [];

    public function loadThps1Plus2()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/thps1plus2/1/21')->json();
        $this->thps1plus2Results = collect($response);
    }

    public function render()
    {
        return view('livewire.thps1-plus2');
    }
}
