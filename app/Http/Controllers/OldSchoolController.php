<?php

namespace App\Http\Controllers;

use App\Models\OldSchool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OldSchoolController extends Controller
{
    public function index()
    {
        $oldSchool = OldSchool::get();
        return view('channels.old-school', compact('oldSchool'));
    }

    public function show($id)
    {   
        $oldSchool = OldSchool::find($id);
        return view('videos.old-school', compact('oldSchool'));
    }

    public function create()
    {
        return view('admin.uploads.oldschool.create');
    }

    public function store(Request $request)
    {
        $oldSchool = $request->validate([
            'game' => ['required'],
            'title' => ['required'],
            'thumbnail' => ['required'],
            'category' => ['required'],
            'video_id' => ['required']
        ]);

        if($request->hasFile('thumbnail')) {
            $fileNameWithExtension = $request->file('thumbnail')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            Storage::disk('s3')->put($fileNameToStore, fopen($request->file('thumbnail'), 'r+'), 'public');
        };
        
        $oldSchoolObject = new OldSchool($oldSchool);
        $oldSchoolObject->save($oldSchool);

        return redirect('admin/uploads');
    }

    public function destroy($id)
    {
        $oldSchool = OldSchool::find($id);
        $oldSchool->delete();

        return redirect('admin/uploads');
    }
}