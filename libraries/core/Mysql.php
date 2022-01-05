<?php

class Mysql extends Conex {
	private $conex;
	private $strquery;
	private $arrValues;

	public function __construct() {
		$this->conex = new Conex();
		$this->conex = $this->conex->conect();
	}
	public function insert(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$insert = $this->conex->prepare($this->strquery);
		$resInsert = $insert->execute($this->arrValues);
		if($resInsert) {
			$lastInsert = $this->conex->lastInsertId();
		} else {
			$lastInsert = 0;
		}
		return $lastInsert;
	}
	// Busca un Registro
	public function select(string $query) {
		$this->strquery = $query;
		$result = $this->conex->prepare($this->strquery);
		$result->execute();
		$data = $result->fetch(PDO::FETCH_ASSOC);
		return $data;
	}
	// Devuelve todos los registros
	public function select_all(string $query) {
		$this->strquery = $query;
		$result = $this->conex->prepare($this->strquery);
		$result->execute();
		$data = $result->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	// Actualiza los registros
	public function update(string $query, array $arrValues) {
		$this->strquery = $query;
		$this->arrValues = $arrValues;
		$update = $this->conex->prepare($this->strquery);
		$resExecute = $update->execute($this->arrValues);
		return $resExecute;
	}
	// Elimina los registros
	public function delete(string $query) {
		$this->strquery = $query;
		$result = $this->conex->prepare($this->strquery);
		$delete = $result->execute();
		return $delete;
	}
}