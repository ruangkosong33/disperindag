<?php

namespace App\View\Composers;

use App\Models\Category;
use App\Models\Division;
use App\Models\Post;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $divisions = Division::all();
        $view->with(['divisions'=>$divisions]);
    }
}
