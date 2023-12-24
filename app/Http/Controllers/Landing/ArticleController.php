<?php

namespace App\Http\Controllers\Landing;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function semuaBerita()
    {
        $articles = Post::with('category')->orderBy('date', 'DESC')->orderBy('id', 'DESC');
        $recent_posts = $articles->limit(3)->get();
        $articles = $articles->paginate(5);
        $categories = Category::with('posts')->get();
        // dd($articles);
        return view('layouts.guest.pages.semua-berita', compact(
            'articles',
        ));
    }

    public function detailBerita($slug)
    {
        $item = Post::with('category')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.detail-berita', compact(
            'item',
        ));
    }
}
