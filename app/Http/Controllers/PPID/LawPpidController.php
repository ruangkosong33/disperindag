<?php

namespace App\Http\Controllers\PPID;

use App\Models\Lawppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LawPpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawppid=Lawppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.law.index-law', ['lawppid'=>$lawppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.law.create-law');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $lawppid=Lawppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('lawppid.index');
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
    public function edit(Lawppid $lawppid)
    {
        return view('layouts.admin.pages.ppid.law.edit-law', ['lawppid'=>$lawppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $lawppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('lawppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawppid $lawppid)
    {
        $lawppid=Lawppid::where('id', $lawppid->id);

        $lawppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('lawppid.index');
    }
}
