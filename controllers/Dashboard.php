<?php

class Dashboard extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function dashboard() {
		$data['title'] = 'Kuyaru';
		$this->view->getView($this,'dashboard',$data);
	}
}