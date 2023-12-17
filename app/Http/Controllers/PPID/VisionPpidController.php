<?php

namespace App\Http\Controllers\PPID;

use App\Models\Visionppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisionPpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visionppid=Visionppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.vision.index-vision', ['visionppid'=>$visionppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.vision.create-vision');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $visionppid=Visionppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('visionppid.index');
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
    public function edit(Visionppid $visionppid)
    {
        return view('layouts.admin.pages.ppid.vision.edit-vision', ['visionppid'=>$visionppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visionppid $visionppid)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $visionppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('visionppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visionppid $visionppid)
    {
        $visionppid=Visionppid::where('id', $visionppid->id);

        $visionppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('visionppid.index');
    }
}
