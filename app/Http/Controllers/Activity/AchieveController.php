<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AchieveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achieve=Achieve::orderBy('id')->get();

        return view('layouts.admin.pages.achieve.index-achieve', ['achieve'=>$achieve]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.achieve.create-achieve');
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

        $achieve=Acvhive::create([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('achieve.index');
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
    public function edit(Achieve $achieve)
    {
        return view('layouts.admin.pages.achieve.edit-achieve', ['achieve'=>$achieve]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achieve $achieve)
    {
        $this->validate($request, [
            'title'=>'required',
            'year'=>'required',
        ]);

        $achieve->update([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('achieve.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achieve $achieve)
    {
        $achieve=Achieve::where('id', $achieve->id);

        $achieve->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('achieve.index');
    }
}
