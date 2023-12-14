<?php

namespace App\Http\Controllers\Information;

use App\Models\Download;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $download=Download::orderBy('id')->get();

        return view('layouts.admin.pages.download.index-download', ['download'=>$download]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.download.create-download');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $download=Download::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('download.index');
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
    public function edit(Download $download)
    {
        return view('layouts.admin.pages.download.edit-download', ['download'=>$download]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Download $download)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $download->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('download.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Download $download)
    {
        $download=Download::where('id', $download->id);

        $download->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('download.index');
    }
}
