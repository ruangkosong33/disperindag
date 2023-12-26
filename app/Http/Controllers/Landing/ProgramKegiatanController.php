<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Download;
use App\Models\Filedownload;
use App\Models\Fileiku;
use App\Models\Fileperform;
use App\Models\Filerenstra;
use App\Models\Filesop;
use App\Models\Iku;
use App\Models\Perform;
use App\Models\Renstra;
use App\Models\Sop;
use Illuminate\Http\Request;

class ProgramKegiatanController extends Controller
{
    public function renstraIndex()
    {
        $items = Renstra::orderBy('year', 'ASC')->get();
        return view('layouts.guest.pages.program-kegiatan.renstra.index', compact('items'));
    }

    public function renstraTahun($year)
    {
        $items = Filerenstra::whereHas('renstras', function ($q) use ($year) {
            $q->where('year', $year);
        })->paginate(10);

        return view('layouts.guest.pages.program-kegiatan.renstra.tahun', compact('year', 'items'));
    }


    public function renstraDetail($slug)
    {
        $item = Filerenstra::with('renstras')->where('slug', $slug)->first();
        return view('layouts.guest.pages.program-kegiatan.renstra.detail', compact('item'));
    }

    public function renjaIndex()
    {
        $items = Perform::orderBy('year', 'ASC')->get();
        return view('layouts.guest.pages.program-kegiatan.renja.index', compact('items'));
    }

    public function renjaTahun($year)
    {
        $items = Fileperform::whereHas('performs', function ($q) use ($year) {
            $q->where('year', $year);
        })->paginate(10);

        return view('layouts.guest.pages.program-kegiatan.renja.tahun', compact('year', 'items'));
    }


    public function renjaDetail($slug)
    {
        $item = Fileperform::with('perfoms')->where('slug', $slug)->first();
        return view('layouts.guest.pages.program-kegiatan.renja.detail', compact('item'));
    }

    public function ikuIndex()
    {
        $items = Iku::orderBy('year', 'ASC')->get();
        return view('layouts.guest.pages.program-kegiatan.iku.index', compact('items'));
    }
    public function ikuTahun($year)
    {
        $items = Fileiku::whereHas('ikus', function ($q) use ($year) {
            $q->where('year', $year);
        })->paginate(10);

        return view('layouts.guest.pages.program-kegiatan.iku.tahun', compact('year', 'items'));
    }


    public function ikuDetail($slug)
    {
        $item = Fileiku::with('ikus')->where('slug', $slug)->first();
        return view('layouts.guest.pages.program-kegiatan.iku.detail', compact('item'));
    }

    public function lkjipIndex()
    {
        $items = Renstra::orderBy('year', 'ASC')->get();
        return view('layouts.guest.pages.program-kegiatan.lkjip.index', compact('items'));
    }

    public function lppdIndex()
    {
        $items = Renstra::orderBy('year', 'ASC')->get();
        return view('layouts.guest.pages.program-kegiatan.lppd.index', compact('items'));
    }

    public function sopIndex()
    {
        $items = Sop::paginate(10);
        return view('layouts.guest.pages.program-kegiatan.sop.index', compact('items'));
    }

    public function sopTahun($slug)
    {
        $sops = Sop::where('slug', $slug)->firstOrFail();
        $items = Filesop::whereHas('sops', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->paginate(10);

        return view('layouts.guest.pages.program-kegiatan.sop.tahun', compact('sops', 'items'));
    }


    public function sopDetail($slug)
    {
        $item = Filesop::with('sops')->where('slug', $slug)->first();
        return view('layouts.guest.pages.program-kegiatan.sop.detail', compact('item'));
    }

    public function downloadIndex()
    {
        $items = Download::paginate(10);
        return view('layouts.guest.pages.download-index', compact('items'));
    }

    public function downloadChild($slug)
    {
        $item = Download::where('slug', $slug)->firstOrFail();
        $items = Filedownload::where('download_id', $item->id)->orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.download-index', compact('item', 'items'));
    }

    public function downloadDetail($slug)
    {
        $item = Filedownload::where('slug', $slug)->firstOrFail();
        return view('layouts.guest.pages.download-detail', compact('item'));
    }
}
