<?php

namespace App\Http\Controllers\Activity;

use App\Models\Perform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perform=Perform::orderBy('id')->get();

        return view('layouts.admin.pages.perform.index-perform', ['perform'=>$perform]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.perform.create-perform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $perform=Perform::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('perform.index');
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
    public function edit(Perform $perform)
    {
        return view('layouts.admin.pages.perform.edit-perform', ['perform'=>$perform]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perform $perform)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $perform->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('perform.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perform $perform)
    {
        $perform=Perform::where('id', $perform->id);

        $perform->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('perform.index');
    }
}
