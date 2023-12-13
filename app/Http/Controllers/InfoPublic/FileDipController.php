<?php

namespace App\Http\Controllers\InfoPublic;

use App\Models\Dip;
use App\Models\Filedip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileDipController extends Controller
{
    public function index(Dip $dip)
    {
        return view('layouts.admin.pages.filedip.index-filedip', ['dip'=>$dip]);
    }

    public function create(Dip $dip)
    {
        return view('layouts.admin.pages.filedip.create-filedip', ['dip'=>$dip]);
    }

    public function store(Request $request, Dip $dip)
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
            $file->storeAs('public/file-DIP', $files);
        }
        else{
            $files=null;
        }

        $filedip=$dip->filedips()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('filedip.index', $dip->id);
    }

    public function edit(Dip $dip, Filedip $filedip)
    {
        return view('layouts.admin.pages.filedip.edit-filedip', ['dip'=>$dip, 'filedip'=>$filedip]);
    }

    public function update(Request $request,  Dip $dip, Filedip $filedip)
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
            $file->storeAs('public/file-DIP', $files);
        }
        else{
            $files=$fileachieve->file;
        }

        $filedip=$dip->filedips()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('filedip.index', $dip->id);
    }

    public function destroy(Dip $dip, Filedip $filedip)
    {
        $filedip=$dip->filedips()->where('id', $filedip->id);

        $filedip->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('filedip.index', $dip->id);
    }
}
