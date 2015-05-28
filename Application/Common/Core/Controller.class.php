<?php
namespace Common\Core;
class Controller {

	protected $view;

	public function __construct() {
		global $viewConfig;
		$this->view = ORG($viewConfig);
	}

	public function assign($key, $value) {
		$this->view->assign($key, $value);
	}

	public function display($template) {
		$this->view->display($template);
	}

	public function error() {

	}

	public function success() {

	}

	public function redirect() {
		
	}
}
