<?php

namespace App\Http\Controllers\Article;

use App\Models\Info;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info=Info::orderBy('id')->get();

        return view('layouts.admin.pages.info.index-info', ['info'=>$info]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::orderBy('id')->get();
        
        return view('layouts.admin.pages.info.create-info', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpg,jpeg,png|max:5000',
            'date'=>'nullable|date_format:d-m-Y',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-info', $images);
        }

        $info=Info::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('info.index');
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
    public function edit(Info $info)
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.info.edit-info', ['category'=>$category, 'info'=>$info]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Info $info)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpg,jpeg,png|max:5000',
            'date'=>'nullable|date_format:d-m-Y',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-info', $images);
        }
        else{
            unset($info['image']);
        }

        $info->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('info.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $info)
    {
        $info=Info::where('id', $info->id);

        $info->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('info.index');
    }
}
