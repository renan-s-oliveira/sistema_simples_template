<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return $this->view->render('app', ['info' => 'informação']);
    }
}
