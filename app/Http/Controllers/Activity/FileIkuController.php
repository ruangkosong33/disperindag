<?php

namespace App\Http\Controllers\Activity;

use App\Models\Iku;
use App\Models\Fileiku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileIkuController extends Controller
{
    public function index(Iku $iku)
    {
        return view('layouts.admin.pages.fileiku.index-fileiku', ['iku'=>$iku]);
    }

    public function create(Iku $iku)
    {
        return view('layouts.admin.pages.fileiku.create-fileiku', ['iku'=>$iku]);
    }

    public function store(Request $request,  Iku $iku)
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
            $file->storeAs('public/file-iku', $files);
        }
        else{
            $files=null;
        }

        $fileiku=$iku->fileikus()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fileiku.index', $iku->id);
    }

    public function edit(Iku $iku, Fileiku $fileiku)
    {
        return view('layouts.admin.pages.fileiku.edit-fileiku', ['iku'=>$iku, 'fileiku'=>$fileiku]);
    }

    public function update(Request $request, Iku $iku, Fileiku $fileiku)
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
            $file->storeAs('public/file-iku', $files);
        }
        else{
            $files=$fileiku->file;
        }

        $fileiku=$iku->fileikus()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fileiku.index', $iku->id);
    }

    public function destroy(Iku $iku, Fileiku $fileiku)
    {
        $fileiku=$iku->fileikus()->where('id', $fileiku->id);

        $fileiku->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('fileiku.index', $iku->id);
    }
}
