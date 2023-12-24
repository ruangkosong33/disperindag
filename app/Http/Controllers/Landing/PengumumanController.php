<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function semua()
    {
        $articles = Info::with('category')->orderBy('date', 'DESC')->orderBy('id', 'DESC');
        // $recent_posts = $articles->limit(3)->get();
        $articles = $articles->paginate(5);
        // $categories = Category::with('posts')->get();
        // dd($articles);
        return view('layouts.guest.pages.pengumuman-semua', compact(
            'articles',
        ));
    }

    public function detail($slug)
    {
        $item = Info::with('category')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.pengumuman-detail', compact(
            'item',
        ));
    }
}
