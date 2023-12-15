<?php

namespace App\Http\Controllers\Article;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::orderBy('id')->get();

        return view('layouts.admin.pages.category.index-category', ['category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.category.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $category=Category::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('category.index');
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
    public function edit(Category $category)
    {
        return view('layouts.admin.pages.category.edit-category', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'title'=>'required',
        ]);

        $category=Category::create([
            'title'=>$request->title,
        ]);

       flash('Data Berhasil Di Update');

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category=Category::where('id', $category->id);

        $category->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('category.index');
    }
}
