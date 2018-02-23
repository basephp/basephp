<?php

namespace App\Controllers;

use Wine\Routing\Controller;

class Welcome extends Controller
{

	public function index()
	{
		echo $this->request->input('name', 'unknown');
	}

}
