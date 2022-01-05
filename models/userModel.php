<?php

class userModel extends Mysql {
	public function __construct() {
		parent::__construct();
	}
	public function consult() {
		$sql = "SELECT * FROM users";
		$cons = $this->select_all($sql);
		return $cons;
	}
	public function getUser($id) {
		$sql = "SELECT * FROM users WHERE id=$id";
		$request = $this->select($sql);
		return $request;
	}
	public function setUser($name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo) {
		$query_insert = "INSERT INTO users(name,lastname,user_name,email,password,document,phone,rol,photo) VALUES(?,?,?,?,?,?,?,?,?)";
		$arrData = array($name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo);
		$request_insert = $this->insert($query_insert,$arrData);
		return $request_insert;
	}
	public function updateUser($id,$name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo) {
		$sql = "UPDATE users SET name=?,lastname=?,user_name=?,email=?,password=?,document=?,phone=?,rol=?,photo=? WHERE id=$id";
		$arrData = array($name,$lastname,$user_name,$email,$password,$document,$phone,$rol,$photo);
		$request = $this->update($sql,$arrData);
		return $request;
	}
	public function deleteUser($id) {
		$sql = "DELETE FROM users WHERE id=$id";
		$request = $this->delete($sql);
		return $request;
	}
}