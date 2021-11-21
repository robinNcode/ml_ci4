<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message', [
		    'welcome' => lang('msg.welcome'),
        ]);
	}

	public function etob()
	{
		session()->set('locale', 'bn');
		return redirect()->to('books');
		
	}

	public function test()
	{
		echo 'I am working man';

		echo '<div><form method="get" action="'.base_url(session("locale")."/test2").'">
			<button type="submit">test2</button></form></div>';
	}

	public function test2()
	{
		echo 'I am working man toooooooooooo!!!!!!!';

		echo '<div><form method="get" action="'.base_url(session("locale")."/test3").'">
			<button type="submit">test2</button></form></div>';
	}
}
