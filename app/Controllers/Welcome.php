<?php

namespace App\Controllers;

use Base\Routing\Controller;

class Welcome extends Controller
{

	public function index()
	{
		return view('welcome')->minify();
	}

}
