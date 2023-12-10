<?php

namespace App\Http\Controllers\Media;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $photo=Photo::orderBy('id')->get();

        return view('layouts.admin.pages.photo.index-photo', ['photo'=>$photo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.photo.create-photo', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
            'date'=>'date_format:d-m-Y',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-photo', $images);
        }

        $photo=Photo::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('photo.index');
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
    public function edit(Photo $photo)
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.photo.edit-photo', ['photo'=>$photo, 'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-photo', $images);
        }
        else{
            unset($video['image']);
        }

        $images=$video->image;

        $photo->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $photo=Photo::where('id', $photo->id);

        $photo->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('photo.index');
    }
}
