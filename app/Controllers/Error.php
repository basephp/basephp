<?php

namespace App\Controllers;

use Base\Routing\Controller;

class Error extends Controller
{

	public function index()
	{
        return 'Error: Page Not Found.';
	}

}
