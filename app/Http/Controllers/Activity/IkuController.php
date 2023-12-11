<?php

namespace App\Http\Controllers\Activity;

use App\Models\Iku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iku=Iku::orderBy('id')->get();

        return view('layouts.admin.pages.iku.index-iku', ['iku'=>$iku]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.iku.create-iku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $iku=Iku::create([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('iku.index');
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
    public function edit(Iku $iku)
    {
        return view('layouts.admin.pages.iku.edit-iku', ['iku'=>$iku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iku $iku)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $iku->update([
            'title'=>$request->title,
            'year'=>$request->year,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('iku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iku $iku)
    {
        $iku=Iku::where('id', $iku->id);

        $iku->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('iku.index');
    }
}
