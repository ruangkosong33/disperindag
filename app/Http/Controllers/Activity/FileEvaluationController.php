<?php

namespace App\Http\Controllers\Activity;

use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Models\Fileevaluation;
use App\Http\Controllers\Controller;

class FileEvaluationController extends Controller
{
    public function index(Evaluation $evaluation)
    {
        return view('layouts.admin.pages.fileevaluation.index-fileevaluation', ['evaluation'=>$evaluation]);
    }

    public function create(Evaluation $evaluation)
    {
        return view('layouts.admin.pages.fileevaluation.create-fileevaluation', ['evaluation'=>$evaluation]);
    }

    public function store(Request $request,  Evaluation $evaluation)
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
            $file->storeAs('public/file-evaluation', $files);
        }
        else{
            $files=null;
        }

        $fileevaluation=$evaluation->fileevaluations()->create([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('fileevaluation.index', $evaluation->id);
    }

    public function edit(Evaluation $evaluation, Fileevaluation $fileevaluation)
    {
        return view('layouts.admin.pages.fileevaluation.edit-fileevaluation', ['evaluation'=>$evaluation, 'fileevaluatiion'=>$fileevaluation]);
    }

    public function update(Request $request, Evaluation $evaluation, Fileevaluation $fileevaluation)
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
            $file->storeAs('public/file-evaluation', $files);
        }
        else{
            $files=$fileevaluation->file;
        }

        $fileevaluation=$evaluation->fileevalutions()->update([
            'title'=>$request->title,
            'file'=>$files,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('fileevaluation.index', $evaluation->id);
    }

    public function destroy(Evaluation $evaluation, Fileevaluation $fileevaluation)
    {
        $fileevaluation=$evaluation->fileevalutions()->where('id', $fileevaluation->id);

        $fileevaluation->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('fileevaluation.index', $evaluation->id);
    }
}
