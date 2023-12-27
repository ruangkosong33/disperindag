<?php

namespace App\Http\Controllers\Landing;

use App\Models\Division;
use App\Models\Employee;
use App\Models\History;
use App\Models\Kadis;
use App\Models\Lawppid;
use App\Models\Profileppid;
use App\Models\Regulation;
use App\Models\Serviceppid;
use App\Models\Structure;
use App\Models\Structureppid;
use App\Models\Task;
use App\Models\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function vision()
    {
        $item = Vision::first();
        return view('layouts.guest.pages.pages.vision', compact('item'));
    }
    public function history()
    {
        $item = History::first();
        return view('layouts.guest.pages.pages.history', compact('item'));
    }
    public function structure()
    {
        $item = Structure::first();
        return view('layouts.guest.pages.pages.structure', compact('item'));
    }
    public function regulation()
    {
        $item = Regulation::first();
        return view('layouts.guest.pages.pages.regulation', compact('item'));
    }
    public function task()
    {
        $item = Task::first();
        return view('layouts.guest.pages.pages.task', compact('item'));
    }

    public function division($slug)
    {
        $item = Division::where('slug', $slug)->firstOrFail();
        $data_pegawai = Employee::where('division_id', $item->id)->get();
        return view('layouts.guest.pages.division', compact('item', 'data_pegawai'));
    }

    public function divisionDataPegawai($slug)
    {
        $item = Employee::where('slug', $slug)->firstOrFail();
        return view('layouts.guest.pages.division-data-pegawai', compact('item'));
    }

    public function kepalaDinas()
    {
        $item = Kadis::first();
        return view('layouts.guest.pages.pages.kadis', compact('item'));
    }

    // PPID
    public function profilePpid()
    {
        $item = Profileppid::first();
        return view('layouts.guest.pages.pages.ppid.profil', compact('item'));
    }

    public function structurePpid()
    {
        $item = Structureppid::first();
        return view('layouts.guest.pages.pages.ppid.structure', compact('item'));
    }

    public function dasarHukumPpid()
    {
        $item = Lawppid::first();
        return view('layouts.guest.pages.pages.ppid.dasar-hukum', compact('item'));
    }

    public function maklumatPelayananPpid()
    {
        $item = Serviceppid::first();
        return view('layouts.guest.pages.pages.ppid.maklumat-pelayanan', compact('item'));
    }

    // public function panduanPpid()
    // {
    //     $item = Structureppid::first();
    //     return view('layouts.guest.pages.pages.ppid.panduan', compact('item'));
    // }
}
