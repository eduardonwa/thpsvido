<?php

namespace App\Http\Controllers;

use App\Models\ThpsNerds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThpsNerdsController extends Controller
{
    public function index()
    {   
        $thpsNerds = ThpsNerds::get();
        return view('channels.thps-nerds', compact('thpsNerds'));
    }

    public function show($id)
    {
        $thpsNerds = ThpsNerds::find($id);
        return view('videos.thps-nerds', compact('thpsNerds'));
    }

    public function create()
    {
        return view('admin.uploads.thpsnerds.create');
    }

    public function store(Request $request)
    {
        $thpsNerds = request()->validate([
            'title' => ['required'],
            'thumbnail' => ['required'],
            'category' => ['required'],
            'video_id' => ['required'],
            'author' => ['nullable']
        ]);

        if($request->hasFile('thumbnail')) {
            $fileNameWithExtension = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            Storage::disk('s3')->put($fileNameToStore, fopen($request->file('thumbnail'), 'r+'), 'public');
        };
        
        $thpsNerdsObject = new ThpsNerds($thpsNerds);
        $thpsNerdsObject->save($thpsNerds);

        return redirect('admin/uploads');
    }

    public function destroy($id)
    {
        $thpsNerds = ThpsNerds::find($id);
        $thpsNerds->delete();

        return redirect('admin/uploads');
    }
}
