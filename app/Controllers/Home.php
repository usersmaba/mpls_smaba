<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function cp()
	{
		return view('login_admin');
	}
	public function login()
	{
		return view('welcome_message');
	}
	//--------------------------------------------------------------------

}
