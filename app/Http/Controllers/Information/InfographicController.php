<?php

namespace App\Http\Controllers\Information;

use App\Models\Infographic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfographicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infographic=Infographic::orderBy('id')->get();

        return view('layouts.admin.pages.infographic.index-infographic', ['infographic'=>$infographic]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.infographic.create-infographic');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-infographics', $images);
        }
        else{
            $images=null;
        }

        $infographic=Infographic::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('infographic.index');
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
    public function edit(Infographic $infographic)
    {
        return view('layouts.admin.pages.infographic.edit-infographic', ['infographic'=>$infographic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Infographic $infographic)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-infographics', $images);
        }
        else{
            $images=$infographic->image;
        }

        $infographic->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('infographic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infographic $infographic)
    {
        $infographic=Infographic::where('id', $infographic->id);

        $infographic->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('infographic.index');
    }
}
