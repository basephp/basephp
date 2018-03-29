<?php

namespace App\Controllers;

use \Base\Routing\Controller;

class Page extends Controller
{

	public function index($id, $name = '')
	{
        // return ['app_time'=>'{APP_TIME}'];

		$name = $this->request->input('name', $name);
        
        // $name = $this->request->session->get('name',$name);
        // $this->request->session->set(['name'=>'New Name']);

		return view('shared',['id'=>$id,'name'=>$name]);
	}

}
