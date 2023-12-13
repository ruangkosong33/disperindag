<?php

namespace App\Http\Controllers\Activity;

use App\Models\Achieve;
use App\Models\Fileachieve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileAchieveController extends Controller
{
    public function index(Achieve $achieve)
    {
        return view('layouts.admin.pages.achieve.index-achieve', ['achieve'=>$achieve]);
    }

    public function create(Achieve $achieve)
    {
        return view('layouts.admin.pages.achieve-create-achieve', ['achieve'=>$achieve]);
    }

    public function store(Request $request, Achieve $achieve)
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
            $file->storeAs('public/file-achieve', $files);
        }
        else{
            $files=null;
        }

        $fileachieve=$achieve->fileachieves()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fileachieve.index', $achieve->id);
    }

    public function edit(Achieve $achieve, Fileachieve $fileachieve)
    {
        return view('layouts.admin.pages.fileachieve.edit-fileachieve', ['achieve'=>$achieve, 'fileachieve'=>$fileachieve]);
    }

    public function update(Request $request,  Achieve $achieve, Fileachieve $fileachieve)
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
            $file->storeAs('public/file-achieve', $files);
        }
        else{
            $files=$fileachieve->file;
        }

        $fileachieve=$achieve->fileachieves()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fileachieve.index', $achieve->id);
    }

    public function destroy(Achieve $achieve, Fileachieve $fileachieve)
    {
        $fileachieve=$achieve->fileachieves()->where('id', $fileachieve->id);

        $fileachieve->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('fileachieve.index', $achieve->id);
    }
}
