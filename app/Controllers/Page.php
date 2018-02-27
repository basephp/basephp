<?php

namespace App\Controllers;

use \Wine\Routing\Controller;

class Page extends Controller
{

	public function index($id, $name = '')
	{
		$name = $this->request->input('name', $name);

        // $this->request->session->set(['test'=>'this is a value']);

		return view('shared',['id'=>$id,'name'=>$name]);
	}

}
