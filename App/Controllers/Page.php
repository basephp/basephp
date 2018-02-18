<?php

namespace App\Controllers;

use \Wine\Routing\Controller;

/**
 * ...
 *
 */
class Page extends Controller
{

    public function index()
    {
        $name = $this->request->input('name', 'unknown');

        return view('homepage',['hello'=>$name]);
    }

}
