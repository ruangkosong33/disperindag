<?php

namespace App\Http\Controllers\PPID;

use App\Models\Maklumatppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaklumatPpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maklumatppid=Maklumatppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.maklumat.index-maklumat', ['maklumatppid'=>$maklumatppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.maklumat.create-maklumat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $maklumatppid=Maklumatppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('maklumatppid.index');
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
    public function edit(Maklumatppid $maklumatppid)
    {
        return view('layouts.admin.pages.ppid.maklumat.edit-maklumat', ['maklumatppid'=>$maklumatppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maklumatppid $maklumatppid)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $maklumatppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('maklumatppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maklumatppid $maklumatppid)
    {
        $maklumatppid=Maklumatppid::where('id', $maklumatppid->id);

        $maklumatppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('maklumatppid.index');
    }
}
