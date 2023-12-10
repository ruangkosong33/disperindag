<?php

namespace App\Http\Controllers\AboutUs;

use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vision=Vision::orderBy('id')->get();

        return view('layouts.admin.pages.vision.index-vision', ['vision'=>$vision]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.vision.create-vision');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Vision $vision)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $vision=Vision::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('vision.index');
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
    public function edit(Vision $vision)
    {
        return view('layouts.admin.pages.vision.edit-vision', ['vision'=>$vision]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vision $vision)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $vision->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('vision.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vision $vision)
    {
        $vision=Vision::where('id', $vision->id);

        $vision->delete();

        flash('Data Berhasil Di Hapus');
        
        return redirect()->route('vision.index');
    }
}
