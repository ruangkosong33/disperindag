<?php

namespace App\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluation=Evaluation::orderBy('id')->get();

        return view('layouts.admin.pages.evaluation.index-evaluation', ['evaluation'=>$evaluation]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.evaluation.create-evaluation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $evaluaton=Evaluation::create([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('evaluation.index');
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
    public function edit(Evaluation $evaluation)
    {
        return view('layouts.admin.pages.evaluation.edit-evaluation', ['evaluation'=>$evaluation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $evaluaton->update([
            'title'=>$request->title,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('evaluation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation=Evaluation::where('id', $evaluation->id);

        $evaluation->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('evaluation.index');
    }
}
