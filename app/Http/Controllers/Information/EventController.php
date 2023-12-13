<?php

namespace App\Http\Controllers\Information;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event=Event::orderBy('id')->get();

        return view('layouts.admin.pages.event.index-event', ['event'=>$event]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.event.create-event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'date'=>'date_format:d-m-Y',
        ]);

        $event=Event::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
            'place'=>$request->place,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('event.index');
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
    public function edit(Event $event)
    {
        return view('layouts.admin.pages.event.edit-event', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title'=>'required',
            'date'=>'date_format:d-m-Y',
        ]);

        $event->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>$request->date,
            'place'=>$request->place,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event=Event::where('id', $event->id);

        $event->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('event.index');
    }
}
