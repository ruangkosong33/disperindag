<?php

namespace App\Http\Controllers\Activity;

use App\Models\Renstra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenstraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $renstra=Renstra::orderBy('id')->get();

        return view('layouts.admin.pages.renstra.index-renstra', ['renstra'=>$renstra]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.renstra.create-renstra');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'year'=>'required',
        ]);

        $renstra=Renstra::create([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('renstra.index');
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
    public function edit(Renstra $renstra)
    {
        return view('layouts.admin.pages.renstra.edit-renstra', ['renstra'=>$renstra]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Renstra $renstra)
    {
        $this->validate($request, [
            'title'=>'required',
            'year'=>'required',
        ]);

        $renstra->update([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('renstra.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Renstra $renstra)
    {
        $renstra=Renstra::where('id', $renstra->id);

        $renstra->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('renstra.index');
    }
}
