<?php

namespace App\Http\Controllers\PPID;

use App\Models\Costppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostPpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $costppid=Costppid::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.cost.index-cost', ['costppid'=>$costppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.cost.create-cost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $costppid=Costppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('costppid.index');
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
    public function edit(Costppid $costppid)
    {
        return view('layouts.admin.pages.ppid.cost.edit-cost', ['costppid'=>$costppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Costppid $costppid)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $costppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('costppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Costppid $costppid)
    {
        $costppid=Costppid::where('id', $costppid->id);

        $costppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('costppid.index');
    }
}
