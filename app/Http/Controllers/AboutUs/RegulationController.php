<?php

namespace App\Http\Controllers\AboutUs;

use App\Models\Regulation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regulation=Regulation::orderBy('id')->get();

        return view('layouts.admin.pages.regulation.index-regulation', ['regulation'=>$regulation]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.regulation.create-regulation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);

        $regulation=Regulation::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('regulation.index');

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
    public function edit(Regulation $regulation)
    {
        return view('layouts.admin.pages.regulation.edit-regulation', ['regulation'=>$regulation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Regulation $regulation)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $regulation->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('regulation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regulation $regulation)
    {
        $regulation=Regulation::where('id', $regulation->id);

        $regulation->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('regulation.index');
    }
}
