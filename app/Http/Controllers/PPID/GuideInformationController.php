<?php

namespace App\Http\Controllers\PPID;

use Illuminate\Http\Request;
use App\Models\Guideinformation;
use App\Http\Controllers\Controller;

class GuideInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guideinformation=Guideinformation::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guideinformation.index-guideinformation', ['guideinformation'=>$guideinformation]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.guideinformation.create-guideinformation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-guideinfromation-ppid', $images);
        }
        else{
            $images=null;
        }

        $guideinformation=Guideinformation::create([
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('guideinfomation.index');
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
    public function edit(Guideinformation $guideinformation)
    {
        return view('layouts.admin.pages.ppid.guideinformation.edit-guideinformation', ['guideinformation'=>$guideinformation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guideinformation $guideinformation)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-guideinfromation-ppid', $images);
        }
        else{
            $images=$guideinformation->image;
        }

        $guideinformation->update([
            'title'=>$request->title,
            'image'=>$images,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('guideinfomation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guideinformation $guideinformation)
    {
        $guideinformation=Guideinformation::where('id', $guideinformation->id);

        $guideinformation->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('guideinfomation.index');
    }
}
