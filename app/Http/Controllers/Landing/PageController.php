<?php

namespace App\Http\Controllers\Landing;

use App\Models\Division;
use App\Models\History;
use App\Models\Profileppid;
use App\Models\Regulation;
use App\Models\Structure;
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

    public function profilePpid()
    {
        $item = Profileppid::first();
        return view('layouts.guest.pages.pages.ppid.profil', compact('item'));
    }

    public function division($slug)
    {
        $item = Division::where('slug', $slug)->firstOrFail();
        return view('layouts.guest.pages.division', compact('item'));
    }

}
