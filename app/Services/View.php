<?php

namespace App\Services;

use App\Models\Template;

class View
{
    public function render($view, $array = [])
    {
        $template = Template::where('status', 'active')->first();
        return view($template->slug. '.' . $view, $array);
    }
}
