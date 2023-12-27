<?php

namespace App\Http\Controllers\Landing;

use App\Models\Banner;
use App\Models\Commodity;
use App\Models\Event;
use App\Models\Info;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function home()
    {
        return view('layouts.guest.pages.home');
    }
    public function beranda()
    {
        $video = Video::orderBy('id', 'DESC')->first();
        $recent_posts = Post::with('category')->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(3)->get();
        $comodities = Commodity::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();
        $events = Event::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();
        $seputar = Post::with('category')->whereHas('category', function ($q) {
            $q->where('title', 'Seputar Indagkop');
        })->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        $articles = Post::with('category')->whereHas('category', function ($q) {
            $q->where('title', 'Artikel');
        })->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        $info_public = Post::with('category')->whereHas('category', function ($q) {
            $q->where('title', 'Info Publik');
        })->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        $pengumuman = Info::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(9)->get();

        $banners = Banner::orderBy('id', 'DESC')->limit(5)->get();

        return view('home-front', compact([
            'video',
            'recent_posts',
            'comodities',
            'events',
            'seputar',
            'articles',
            'info_public',
            'pengumuman',
            'banners',
        ]));
    }

    public function semuaAgenda()
    {
        $items = Event::orderBy('id', 'DESC')->paginate(9);
        return view('layouts.guest.pages.agenda-semua', compact('items'));
    }

    public function detailAgenda($slug)
    {
        $item = Event::where('slug', $slug)->firstOrFail();
        return view('layouts.guest.pages.agenda-detail', compact('item'));
    }

    public function hargaKomoditi()
    {
        $items = Commodity::orderBy('date', 'DESC')->orderBy('id', 'DESC')->paginate(20);
        return view('layouts.guest.pages.harga-komoditi', compact('items'));
    }

    public function indagkopTv()
    {
        $items = Video::orderBy('id', 'DESC')->paginate(20);
        return view('layouts.guest.pages.tv-indagkop', compact('items'));
    }
}
