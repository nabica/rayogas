<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Blog\BlogPost;

class RandomBlogPostComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('randomBlogPosts', BlogPost::latest()->limit(3)->get());
    }
}
