<?php

namespace App\Http\Controllers\Activity;

use App\Models\Perform;
use App\Models\Fileperform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilePerformController extends Controller
{
    public function index(Perform $perform)
    {
        return view('layouts.admin.pages.perform.index-perform', ['perform'=>$perform]);
    }

    public function create(Perform $perform)
    {
        return view('layouts.admin.pages.perform.create-perform', ['perform'=>$perform]);
    }

    public function store(Request $request, Perform $perform)
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
            $file->storeAs('public/file-perform', $files);
        }
        else{
            $files=null;
        }

        $fileperform=$perform->fileperforms()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fileperform.index', $perform->id);
    }

    public function edit(Perform $perform,  Fileperform $fileperform)
    {
        return view('layouts.admin.pages.fileperform.edit-fileperform', ['perform'=>$perform, 'fileperform'=>$fileperform]);
    }

    public function update(Request $request,  Perform $perform, Fileperform $fileperform)
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
            $file->storeAs('public/file-perform', $files);
        }
        else{
            $files=$fileperform->file;
        }

        $fileperform=$perform->fileperforms()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fileperform.index', $perform->id);
    }

    public function destroy(Perform $perform, Fileperform $fileperform)
    {
        $fileperform=$perform->fileperforms()->where('id', $fileperform->id);

        $fileperform->delete();

        flash('Data Berhasil Di Update');

        return redirect()->route('fileperform.index', $perform->id);
    }
}
