<?php

namespace App\Http\Controllers\Organization;

use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $division=Division::orderBy('id')->get();

        return view('layouts.admin.pages.division.index-division', ['division'=>$division]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.division.create-division');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,jpg|max:5000'
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-division', $images);
        }

        $division=Division::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('division.index');
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
    public function edit(Division $division)
    {
        return view('layouts.admin.pages.division.edit-division', ['division'=>$division]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,png,jpg|max:5000'
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-division', $images);
        }
        else{
            unset($division['image']);
        }

        $images=$division->image;

        $division->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('division.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $division=Division::where('id',$division->id);

        $division->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('division.index');
    }
}
