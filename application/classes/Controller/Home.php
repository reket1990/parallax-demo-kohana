<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

	public function action_index()
	{
		$view = View::factory('home');
		$view->message = 'home';
		$this->template->content = $view;
	}

}
