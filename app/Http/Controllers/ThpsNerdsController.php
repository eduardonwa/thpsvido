<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThpsNerds;

class ThpsNerdsController extends Controller
{
    public function index()
    {
        return view('channels.thps-nerds');
    }
}
