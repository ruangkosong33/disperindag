<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class SidebarPostComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $recent_posts = Post::orderBy('date', 'desc')->orderBy('id', 'desc')->limit(6)->get();
        $categories = Category::with('posts')->get();
        $view->with(['recent_posts'=>$recent_posts, 'categories'=>$categories]);
    }
}
