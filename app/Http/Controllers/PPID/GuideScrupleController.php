<?php

namespace App\Http\Controllers\PPID;

use App\Models\Dip;
use App\Models\Guidescruple;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuideScrupleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guidescruple=Guidescruple::with('dip')->orderBy('id')->orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guidescruple.index-guidescruple', ['guidescruple'=>$guidescruple]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guidescruple.create-guidescruple', ['dip'=>$dip,]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'dip_id'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'job'=>'required',
            'applicantdata'=>'required',
            'objective'=>'required',
            'obtaion'=>'required',
            'copy'=>'required',
            'method'=>'required',
        ]);

        $guidescruple=Guidescruple::create([
            'name'=>$request->name,
            'dip_id'=>$request->dip_id,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'job'=>$request->job,
            'applicantdata'=>$request->applicantdata,
            'objective'=>$request->objective,
            'obtaion'=>$request->obtaion,
            'copy'=>$request->copy,
            'method'=>$request->method,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('guidescruple.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guidescruple $guidescruple)
    {
        $guidescruple=Guidescruple::with('dip')->orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guidescruple.show-guidescruple', ['guidescruple'=>$guidescruple]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guidescruple $guidescruple)
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guidescruple.edit-guidescruple', ['dip'=>$dip, 'guidescruple'=>$guidescruple]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guidescruple $guidescruple)
    {
        $this->validate($request, [
            'name'=>'required',
            'dip_id'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'job'=>'required',
            'applicantdata'=>'required',
            'objective'=>'required',
            'obtaion'=>'required',
            'copy'=>'required',
            'method'=>'required',
        ]);

        $guidescruple->update([
            'name'=>$request->name,
            'dip_id'=>$request->dip_id,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'job'=>$request->job,
            'applicantdata'=>$request->applicantdata,
            'objective'=>$request->objective,
            'obtaion'=>$request->obtaion,
            'copy'=>$request->copy,
            'method'=>$request->method,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('guidescruple.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guidescruple $guidescruple)
    {
        $guidescruple=Guidescruple::where('id', $guidescruple->id);

        $guidescruple->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('guidescruple.index');
    }
}
