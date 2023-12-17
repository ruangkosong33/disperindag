<?php

namespace App\Http\Controllers\PPID;

use App\Models\Profileppid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilePpidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profileppid=Profileppid::orderBy('id');

        return view('layouts.admin.pages.ppid.profile.index-profile', ['profilppid'=>$profileppid]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.ppid.profile.create-profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $profileppid=Profileppid::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('profileppid.index');
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
    public function edit(Profileppid $profileppid)
    {
        return view('layouts.admin.pages.ppid.edit-profile', ['profileppid'=>$profileppid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profileppid $profileppid)
    {
        $this->validate($request, [
            'title'=>'required',
        ]);

        $profileppid->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('profileppid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profileppid $profileppid)
    {
        $profileppid=Profileppid::where('id', $profileppid->id);

        $profileppid->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('profileppid.index');
    }
}
