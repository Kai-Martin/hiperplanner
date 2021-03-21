<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo __file__; die; 
		return view('welcome_message');
	}
}
