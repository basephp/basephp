<?php

namespace App\Controllers;

use \Wine\Routing\Controller;

class Json extends Controller
{

	public function index($id, $name = '')
	{
		$name = $this->request->input('name', $name);

		return ['id'=>$id,'name'=>$name];
	}

}
