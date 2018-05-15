<?php

namespace App\Controllers;

use Base\Routing\Controller;

class Error extends Controller
{

	public function index()
	{
        if ($this->request->isMethod('GET') && !$this->request->isConsole() && !$this->request->isAjax())
        {
            // redirect('/');
        }

        return 'Error: Resources not found.';
	}

}
