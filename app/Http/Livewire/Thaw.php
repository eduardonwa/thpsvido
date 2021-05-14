<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Thaw extends Component
{
    public $thawResults = [];

    public function loadTHAW()
    {
        $response = Http::get('http://thvid-api.herokuapp.com/videos/game/THAW/1/21')->json();
        $this->thawResults = collect($response);
    }

    public function render()
    {
        return view('livewire.thaw');
    }
}
