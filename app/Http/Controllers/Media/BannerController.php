<?php

namespace App\Http\Controllers\Media;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner=Banner::orderBy('id')->get();

        return view('layouts.admin.pages.banner.index-banner', ['banner'=>$banner]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.banner.create-banner');
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

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-banner', $images);
        }

        $banner=Banner::create([
            'title'=>$request->title,
            'image'=>$images,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Simpan');

        return redirect()->route('banner.index');
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
    public function edit(Banner $banner)
    {
        return view('layouts.admin.pages.banner.edit-banner', ['banner'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
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
            $file->storeAs('public/image-banner', $images);
        }
        else{
            unset($banner['image']);
        }

        $images=$banner->image;

        $banner->update([
            'title'=>$request->title,
            'image'=>$images,
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Update');

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner=Banner::where('id', $banner->id);

        $banner->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('banner.index');
    }
}
