<?php

namespace App\Http\Controllers\Activity;

use App\Models\Neraca;
use App\Models\Fileneraca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileNeracaController extends Controller
{
    public function index(Neraca $neraca)
    {
        return view('layouts.admin.pages.neraca.index-neraca', ['neraca'=>$neraca]);
    }

    public function create(Neraca $neraca)
    {
        return view('layouts.admin.pages.fileneraca.create-fileneraca', ['neraca'=>$neraca]);
    }

    public function store(Request $request, Neraca $neraca)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'nullable|mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-neraca', $files);
        }
        else{
            $files=null;
        }

        $fileneraca=$neraca->fileneracas()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fileneraca.index', $neraca->id);
    }

    public function edit(Neraca $neraca, Fileneraca $fileneraca)
    {
        return view('layouts.admin.pages.fileneraca.edit-fileneraca', ['neraca'=>$neraca, 'fileneraca'=>$fileneraca]);
    }

    public function update(Request $request, Neraca $neraca, Fileneraca $fileneraca)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'mimes:pdf|max:50000',
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-neraca', $files);
        }
        else{
            $files=$fileneraca->file;
        }

        $fileneraca=$neraca->fileneracas()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fileneraca.index', $neraca->id);
    }

    public function destroy(Neraca $neraca, Fileneraca $fileneraca)
    {
        $fileneraca=$neraca->fileneracas()->where('id', $fileneraca->id);

        $fileneraca->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('fileneraca.index', $neraca->id);
    }
}
