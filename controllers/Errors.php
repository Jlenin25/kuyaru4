<?php

class Errors extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function notFound() {
		$this->view->getView($this,'error');
	}
}
$notFound = new Errors();
$notFound->notFound();