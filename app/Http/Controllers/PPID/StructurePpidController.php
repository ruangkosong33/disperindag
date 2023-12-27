<?php

namespace App\Http\Controllers\PPID;

use Illuminate\Http\Request;
use App\Models\Structureppid;
use App\Http\Controllers\Controller;

class StructurePpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structureppid=Structureppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.structure.index-structure', ['structureppid'=>$structureppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.structure.create-structure');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            $file->storeAs('public/image-structure-ppid', $images);
        }
        else{
            $images=null;
        }

        $structureppid=Structureppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('structureppid.index');
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
    public function edit(Structureppid $structureppid)
    {
        return view('layouts.admin.pages.ppid.structure.edit-structure', ['structureppid'=>$structureppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Structureppid $structureppid)
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
            $file->storeAs('public/image-structure-ppid', $images);
        }
        else{
            $images=$structureppid->image;
        }

        $structureppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('structureppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structureppid $structureppid)
    {
        $structureppid=Structureppid::where('id', $structureppid->id);

        $structureppid->delete();

        flash('Data Berhasil Di Update');

        return redirect()->route('structureppid.index');
    }
}
