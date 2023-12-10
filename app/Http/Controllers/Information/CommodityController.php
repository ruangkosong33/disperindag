<?php

namespace App\Http\Controllers\Information;

use App\Models\Category;
use App\Models\Commodity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commodity=Commodity::orderBy('id')->get();

        return view('layouts.admin.pages.commodity.index-commodity', ['commodity'=>$commodity]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.commodity.create-commodity', ['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this-validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpg,jpeg,png|max>5000',
            'date'=>'date_format:d-m-Y',
        ]);
        
        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-commodity', $images);
        }

        $commodity=Commodity::create([
            'title'=>$request->title,
            'image'=>$images,
            'price'=>$request->price,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('commodity.index');
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
    public function edit(Commodity $commodity)
    {
        return view('layouts.admin.pages.commodity.edit-commodity', ['commodity'=>$commodity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commodity $commodity)
    {
        $this-validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpg,jpeg,png|max>5000',
            'date'=>'date_format:d-m-Y',
        ]);
        
        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-commodity', $images);
        }
        else{
            unset($commodity['image']);
        }

        $images=$commodity->image;

        $commodity->update([
            'title'=>$request->title,
            'image'=>$images,
            'price'=>$request->price,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('commodity.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commodity $commodity)
    {
        $commodity=Commodity::where('id', $commodity->id);

        $commodity->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('commodity.index');
    }
}
