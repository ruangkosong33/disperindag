<?php

namespace App\Http\Controllers\Information;

use App\Models\Download;
use App\Models\Filedownload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileDownloadController extends Controller
{
    public function index(Download $download)
    {
        return view('layouts.admin.pages.filedownload.index-filedownload', ['download'=>$download]);
    }

    public function create(Download $download)
    {
        return view('layouts.admin.pages.filedownload.create-filedownload', ['download'=>$download]);
    }

    public function store(Request $request, Download $download)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'nullable|mimes:pdf|max:50000',
            'date'=>'date_format:d-m-Y'
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-download', $files);
        }
        else{
            $files=null;
        }

        $filedownload=$download->filedownloads()->create([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('filedownload.index', $download->id);
    }

    public function edit(Download $download, Filedownload $filedownload)
    {
        return view('layouts.admin.pages.filedownload.edit-filedownload', ['download'=>$download, 'filedownload'=>$filedownload]);
    }

    public function update(Request $request,  Download $download, Filedownload $filedownload)
    {
        $this->validate($request, [
            'title'=>'required',
            'file'=>'nullable|mimes:pdf|max:50000',
            'date'=>'date_format:d-m-Y',
        ]);

        if($request->file('file'))
        {
            $file=$request->file('file');
            $extension=$file->getClientOriginalName();
            $files=$extension;
            $file->storeAs('public/file-download', $files);
        }
        else{
            $files=$filedownload->file;
        }

        $filedownload=$download->filedownloads()->update([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('filedownload.index', $download->id);
    }

    public function destroy(Download $download, Filedownload $filedownload)
    {
        $filedownload=$download->filedownloads()->where('id', $filedownload->id);

        $filedownload->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('filedownload.index', $download->id);
    }
}
