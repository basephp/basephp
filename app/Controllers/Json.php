<?php

namespace App\Controllers;

use \Base\Routing\Controller;

class Json extends Controller
{

	public function index($id, $name = '')
	{
		$name = $this->request->input('name', $name);

		return ['id'=>$id,'name'=>$name];
	}

}
