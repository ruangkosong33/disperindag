<?php

namespace App\Http\Controllers\Activity;

use App\Models\Neraca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NeracaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $neraca=Neraca::orderBy('id')->get();

        return view('layouts.admin.pages.neraca.index-neraca', ['nerace'=>$neraca]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.neraca.create-neraca');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $neraca=Neraca::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('neraca.index');
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
    public function edit(Neraca $neraca)
    {
        return view('layouts.admin.pages.neraca.edit-neraca', ['neraca'=>$neraca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Neraca $neraca)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $neraca=Neraca::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('neraca.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Neraca $neraca)
    {
        $neraca=Neraca::where('id', $neraca->id);

        flash('Data Berhasil Di Hapus');

        return redirect()->route('neraca.index');
    }
}
