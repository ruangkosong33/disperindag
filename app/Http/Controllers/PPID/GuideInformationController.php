<?php

namespace App\Http\Controllers\PPID;

use App\Models\Dip;
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
        $guideinformation=Guideinformation::with('dips')->orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guideinformation.index-guideinformation', ['guideinformation'=>$guideinformation]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guideinformation.create-guideinformation', ['dip'=>$dip]);
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
            'copy'=>'required',
            'method'=>'required',
        ]);

        $guideinformation=Guideinformation::create([
            'name'=>$request->name,
            'dip_id'=>$request->dip_id,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'job'=>$request->job,
            'applicantdata'=>$request->applicantdata,
            'objective'=>$request->objective,
            'copy'=>$request->copy,
            'method'=>$request->method,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('guideinformation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guideinformation $guideinformation)
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guideinformation.show-guideinformation', ['guideinformation'=>$guideinformation, 'dip'=>$dip]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guideinformation $guideinformation)
    {
        $dip=Dip::orderBy('id')->get();

        return view('layouts.admin.pages.ppid.guideinformation.edit-guideinformation',  ['guideinformation'=>$guideinformation, 'dip'=>$dip]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guideinformation $guideinformation)
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
            'copy'=>'required',
            'method'=>'required',
        ]);

        $guideinformation->update([
            'name'=>$request->name,
            'dip_id'=>$request->dip_id,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'job'=>$request->job,
            'applicantdata'=>$request->applicantdata,
            'objective'=>$request->objective,
            'copy'=>$request->copy,
            'method'=>$request->method,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('guideinformation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guideinformation $guideinformation)
    {
        $guideinformation=Guideinformation::where('id', $guideinformation->id);

        $guideinformation->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('guideinformation.index');
    }
}
