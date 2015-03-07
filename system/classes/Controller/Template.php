<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {
	public $template = 'common/site';

	public function before()
	{
		parent::before();

		// Assign view based on controller
		$view_name = strtolower($this->request->controller());
		$view = View::factory($view_name);
		$this->template->view = $view;
	}
}
