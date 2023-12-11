<?php

namespace App\Http\Controllers\Activity;

use App\Models\Renstra;
use App\Models\Filerenstra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileRenstraController extends Controller
{
    public function index(Renstra $renstra)
    {
        return view('layouts.admin.pages.filerenstra.index-filerenstra', ['renstra'=>$renstra]);
    }

    public function create(Renstra $renstra)
    {
        return view('layouts.admin.pages.filerenstra.create-filerenstra', ['renstra'=>$renstra]);
    }

    public function store(Request $request, Renstra $renstra)
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
            $file->storeAs('public/file-renstra', $files);
        }
        else{
            $files=null;
        }

        $filerenstra=$renstra->filerenstras()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('filerenstra.index', $renstra->id);
    }

    public function edit(Renstra $renstra, Filerenstra $filerenstra)
    {
        return view('layouts.admin.pages.filerenstra.edit-filerenstra', ['renstra'=>$renstra, 'filerenstra'=>$filerenstra]);
    }

    public function update(Request $request, Renstra $renstra, Filerenstra $filerenstra)
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
            $file->storeAs('public/file-renstra', $files);
        }
        else{
            $files=$filerenstra->file;
        }

        $filerenstra=$renstra->filerenstras()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('filerenstra.index', $renstra->id);
    }

    public function destroy(Renstra $renstra, Filerenstra $filerenstra)
    {
        $filerenstra=$renstra->filerenstras()->where('id', $filerenstra->id);

        $filerenstra->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('filerenstra.index', $renstra->id);
    }
}
