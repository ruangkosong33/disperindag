<?php

namespace App\Http\Controllers\Activity;

use App\Models\Sop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sop=Sop::orderBy('id')->get();

        return view('layouts.admin.pages.sop.index-sop', ['sop'=>$sop]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.sop.create-sop');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $sop=Sop::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('sop.index');
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
    public function edit(Sop $sop)
    {
        return view('layouts.admin.pages.sop.edit-sop', ['sop'=>$sop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sop $sop)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $sop->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('sop.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sop $sop)
    {
        $sop=Sop::where('id', $sop->id);

        $sop->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('sop.index');
    }
}
