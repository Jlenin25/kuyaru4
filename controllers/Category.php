<?php

class Category extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function category() {
		$data['title'] = 'Kuyaru';
		$this->view->getView($this,'index',$data);
	}
	public function insert() {
		$data = $this->model->setUser('Lenin','Monrroy','JLenin','jlenin@gmail.com','1234','12345678','123456789','admin','fotoq.jpg');
		print_r($data);
	}
	public function viewUser($id) {
		$data = $this->model->getUser($id);
		print_r($data);
	}
	public function update() {
		$data = $this->model->updateUser(6,'Josue','Monrroy','JLenin','jlenin@gmail.com','1234','12345678','123456789','admin','fotoq.jpg');
		print_r($data);
	}
	public function deleteUser($id) {
		$data = $this->model->deleteUser($id);
		print_r($data);
	}
}