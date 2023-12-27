<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function permohonanInformasi()
    {
        return view('layouts.guest.pages.pages.ppid.permohonan-informasi');
    }

    public function permohonanKeberatanInformasi()
    {
        return view('layouts.guest.pages.pages.ppid.permohonan-keberatan-informasi');
    }

    public function permohonanInformasiRequest(Request $request)
    {
        return redirect()->back();
    }

    public function permohonanKeberatanInformasiRequest(Request $request)
    {
        return redirect()->back();
    }
}
