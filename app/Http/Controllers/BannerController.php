<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create()
    {
        return view('components.tabs-banner');
    }

    public function store(Request $request)
    {   
        $banner = request()->validate([
            'video_title' => ['required'],
            'proskaters' => ['required'],
            'youtube_url' => ['required'],
            'play_now_uri' => ['required']
        ]);

        $bannerObject = new Banner($banner);
        $bannerObject->save($banner);

        return redirect('admin/uploads');
    }
}