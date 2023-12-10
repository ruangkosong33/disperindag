<?php

namespace App\Http\Controllers\Activity;

use App\Models\Renstra;
use App\Models\Filerenstra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileRenstraController extends Controller
{
    public function index(Renstra $renstra)
    {
        return view('layouts.admin.pages.filerenstra.index-filerenstra', ['renstra'=>$renstra]);
    }

    public function create(Renstra $renstra)
    {
        return view('layouts.admin.pages.filerenstra.create-filerenstra', ['renstra'=>$renstra]);
    }
}
