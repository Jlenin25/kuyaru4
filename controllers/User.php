<?php

class User extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$data['title'] = 'Kuyaru';
		$set = $this->model->consult();
		$this->view->getView($this,'index',$data,$set);
	}
	public function create() {
		if($_POST) {
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$user_name = $_POST['user_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$document = $_POST['document'];
			$phone = $_POST['phone'];
			$rol = $_POST['rol'];
			$photo = $_POST['photo'];
			$data = $this->model->setUser($name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo);
			return $this->index();
		}
		include_once "views/user/create.php";
	}
	public function viewUser($id) {
		$data = $this->model->getUser($id);
		print_r($data);
	}
	public function edit() {
		if($_POST) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$user_name = $_POST['user_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$document = $_POST['document'];
			$phone = $_POST['phone'];
			$rol = $_POST['rol'];
			$photo = $_POST['photo'];
			$data = $this->model->updateUser($name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo);
			return $this->index();
		}
		$id = $_GET['id'];
		$data = $this->model->getUser($id);
		print_r($data);
		include_once "views/user/edit.php";
	}
	public function delete($id) {
		$data = $this->model->deleteUser($id);
		return 'views/user/index.php';
	}
}