<?php

namespace App\Http\Controllers\Media;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video=Video::orderBy('id')->get();

        return view('layouts.admin.pages.video.index-video', ['video'=>$video]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.video.create-video', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,jpg|max:5000',
        ]);

        if($request->file('image'));
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-video', $images);
        }

        $video=Video::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.video.edit-video', ['video'=>$video, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,jpg|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-video', $images);
        }
        else{
            unset($video['image']);
        }

        $images=$video->image;

        $video->update([
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video=Video::where('id', $video->id);

        $video->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('video.index');
    }
}
