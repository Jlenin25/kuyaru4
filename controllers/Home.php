<?php

class Home extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function home() {
		$data['title'] = 'Kuyaru';
		$this->view->getView($this,'home',$data);
	}
}