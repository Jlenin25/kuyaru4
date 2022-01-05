<?php

class Controller {
	public function __construct() {
		$this->view = new View();
		$this->loadModel();
	}
	public function loadModel() {
		$model = get_class($this).'Model';
		$routClass = 'models/'.$model.'.php';
		if(file_exists($routClass)) {
			require_once($routClass);
			$this->model = new $model();
		}
	}
}