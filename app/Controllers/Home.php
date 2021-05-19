<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	    $lang = $this->request->getLocale();

		return view('welcome_message', [
		    'welcome' => lang('msg.welcome'),
        ]);
	}
}
