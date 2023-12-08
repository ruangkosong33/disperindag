<?php

namespace App\Http\Controllers\AboutUs;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $history=History::orderBy('id')->get();

        return view('layouts.admin.pages.history.index-history', ['history'=>$history]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.history.create-history');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'description'=>'nullable',
        ]);

        $history=History::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan.');

        return redirect()->route('history.index');
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
    public function edit(History $history)
    {
        return view('layouts.admin.pages.history.edit-history', ['history'=>$history]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $history->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('history.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        $history=History::where('id', $history->id);

        $history->delete();

        Alert::success('Berhasil', 'Data Berhasil Di Hapus');

        return redirect()->route('history.index');
    }
}
