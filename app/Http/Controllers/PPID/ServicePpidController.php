<?php

namespace App\Http\Controllers\PPID;

use App\Models\Serviceppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicePpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceppid=Serviceppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.service.index-service', ['serviceppid'=>$serviceppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.service.create-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $serviceppid=Serviceppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('serviceppid.index');
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
    public function edit(Serviceppid $serviceppid)
    {
        return view('layouts.admin.pages.ppid.service.edit-service', ['serviceppid'=>$serviceppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Serviceppid $serviceppid)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $serviceppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('serviceppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Serviceppid $serviceppid)
    {
        $serviceppid=Serviceppid::where('id', $serviceppid->id);

        $serviceppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('serviceppid.index');
    }
}
