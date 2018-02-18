<?php

namespace App\Controllers;

use \Wine\Routing\Controller;

/**
 * ...
 *
 */
class Page extends Controller
{

    public function index($id, $name)
    {
        $name = $this->request->input('name', $name);

        return view('homepage',[
            'hello'=>$name
        ]);
    }

}
