<?php

namespace App\Http\Controllers\InfoPublic;

use App\Models\Dip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.dip.index-dip', ['dip'=>$dip]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.dip.create-dip');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $dip=Dip::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('dip.index');
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
    public function edit(Dip $dip)
    {
        return view('layouts.admin.pages.dip.edit-dip', ['dip'=>$dips]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dip $dip)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $dip->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('dip.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dip $dip)
    {
        $dip=Dip::where('id', $dip->id);

        $dip->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('dip.index');
    }
}
