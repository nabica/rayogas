<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Home\HomeFloatingBar;

class FloatingBarComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('floatingBar', HomeFloatingBar::findOrFail(1));
    }
}
