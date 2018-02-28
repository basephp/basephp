<?php

namespace App\Controllers;

use \Wine\Routing\Controller;

class Page extends Controller
{

	public function index($id, $name = '')
	{
		$name = $this->request->input('name', $name);
        $name = $this->request->session->get('name',$name);

        $this->request->session->set(['name'=>'John Smith']);

		return view('shared',['id'=>$id,'name'=>$name]);
	}

}
