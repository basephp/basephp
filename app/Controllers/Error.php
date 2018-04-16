<?php

namespace App\Controllers;

use \Base\Routing\Controller;

class Error extends Controller
{

	public function index()
	{
        $this->response->setStatusCode(404);
        return 'Error: Page Not Found.';
	}

}
