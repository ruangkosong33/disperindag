<?php

namespace App\Http\Controllers\AboutUs;

use App\Models\Kadis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KadisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kadis=Kadis::orderBy('id')->get();

        return view('layouts.admin.pages.kadis.index-kadis', ['kadis'=>$kadis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.kadis.create-kadis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'images'=>'nullable|mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-kadis', $images);
        }
        else{
            $images=null;
        }

        $kadis=Kadis::create([
            'title'=>$request->title,
            'image'=>$images,
            'periode'=>$periode,
            'description'=>$description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('kadis.index');
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
    public function edit(Kadis $kadis)
    {
        return view('layouts.admin.pages.kadis.edit-kadis', ['kadis'=>$kadis]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kadis $kadis)
    {
        $this->validate($request, [
            'title'=>'required',
            'images'=>'nullable|mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-kadis', $images);
        }
        else{
            $images=$kadis->image;
        }

        $kadis->update([
            'title'=>$request->title,
            'image'=>$images,
            'periode'=>$periode,
            'description'=>$description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('kadis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kadis $kadis)
    {
        $kadis=Kadis::where('id', $kadis->id);

        $kadis->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('kadis.index');
    }
}
