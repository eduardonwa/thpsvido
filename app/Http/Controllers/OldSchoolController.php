<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OldSchool;

class OldSchoolController extends Controller
{
    public function index()
    {
        $oldSchool = OldSchool::get();
        return view('channels.old-school', compact('oldSchool'));
    }

    public function show()
    {
        return view('videos.old-school');
    }

    public function store(Request $request)
    {
        $role = request()->validate([
            'game' => ['required'],
            'title' => ['required'],
            'thumbnail' => ['required'],
            'video_id' => ['required']
        ]);
    }
}