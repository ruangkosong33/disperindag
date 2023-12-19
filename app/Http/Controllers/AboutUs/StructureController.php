<?php

namespace App\Http\Controllers\AboutUs;

use App\Models\Structure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structure=Structure::orderBy('id')->get();

        return view('layouts.admin.pages.structure.index-structure', ['structure'=>$structure]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.structure.create-structure');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-structures', $images);
        }
        else{
            $images=null;
        }

        $structure=Structure::create([
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('structure.index');
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
    public function edit(Structure $structure)
    {
        return view('layouts.admin.pages.structure.edit-structure', ['structure'=>$structure]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Structure $structure)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,png,jpeg|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-structure', $images);
        }
        else{
            $images=$structure->image;
        }

        $structure->update([
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('structure.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structure $structure)
    {
        $structure=Structure::where('id', $structure->id);

        $structure->delete();

        flash('Data berhasil Di Hapus');

        return redirect()->route('structure.index');
    }
}
