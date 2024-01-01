<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Dip;
use App\Models\Guidescruple;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function permohonanInformasi()
    {
        $categories = Dip::orderBy('title')->pluck('id', 'title');
        return view('layouts.guest.pages.pages.ppid.permohonan-informasi', compact('categories'));
    }

    public function permohonanKeberatanInformasi()
    {
        $categories = Dip::orderBy('title')->get()->pluck('id', 'title');
        return view('layouts.guest.pages.pages.ppid.permohonan-keberatan-informasi', compact('categories'));
    }

    public function permohonanInformasiRequest(Request $request)
    {
        dd('test');
        return redirect()->back();
    }

    public function permohonanKeberatanInformasiRequest(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'category'=>'required',
            'address'=>'required',
            'email'=>'required|email',
            'telepon'=>'required',
            'pekerjaan'=>'required',
            'dataPemohon'=>'required',
            'tujuan'=>'required',
            'caraMemperolehInformasi' => 'required',
            'salinan_informasi' => 'required',
            'caraSalinanInformasi' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        Guidescruple::create([
            'name' => $request->name,
            'dip_id' => $request->category,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->telepon,
            'job' => $request->pekerjaan,
            'applicantdata' => $request->dataPemohon,
            'objective' => $request->tujuan,
            'obtaion' => (int) $request->caraMemperolehInformasi,
            'copy' => $request->salinan_informasi,
            'method' => $request->caraSalinanInformasi,
        ]);

        return redirect()->back()->with('message', 'Terima kasih telah mengisi formulir, Permohonan Anda telah terkirim');
    }
}
