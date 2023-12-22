<?php

namespace App\Http\Controllers\Organization;

use App\Models\Division;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee=Employee::with(['divisions'])->get();

        return view('layouts.admin.pages.employee.index-employee', ['employee'=>$employee]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division=Division::orderBy('id')->get();

        return view('layouts.admin.pages.employee.create-employee', ['division'=>$division]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'nullable|mimes:jpg,png,jpeg|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-employee', $images);
        }
        else{
            $images=null;
        }

        $employee=Employee::create([
            'division_id'=>$request->division_id,
            'name'=>$request->name,
            'nip'=>$request->nip,
            'image'=>$images,
            'level'=>$request->level,
            'position'=>$request->position,
            'education'=>$request->education,
            'pim'=>$request->pim,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('employee.index');
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
    public function edit(Employee $employee)
    {
        $division=Division::orderBy('id')->get();

        return view('layouts.admin.pages.employee.edit-employee', ['division'=>$division, 'employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'nullable|mimes:jpg,png,jpeg|max:5000',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=$extension;
            $file->storeAs('public/image-employee', $images);
        }
        else{
            $images=$employee->image;
        }

        $employee->update([
            'division_id'=>$request->division_id,
            'name'=>$request->name,
            'nip'=>$request->nip,
            'image'=>$images,
            'level'=>$request->level,
            'education'=>$request->education,
            'position'=>$request->position,
            'pim'=>$request->pim,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee=Employee::where('id', $employee->id);

        $employee->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('employee.index');
    }
}
