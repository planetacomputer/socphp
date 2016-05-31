<?php
require_once('db_abstract_model.php');

class Aulas extends DBAbstractModel {
	public $num;
	public $superficie;
	public $edifici;
	public $id;

	function __construct() {
		$this->db_name = 'book_example';
	}

	//
	public function get($num='') {
		if($num != ''):
			$this->query = "SELECT id, num, superficie, edificio
			FROM aulas
			WHERE num = '$num'";
			$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
			foreach ($this->rows[0] as $propiedad=>$valor):
				$this->$propiedad = $valor;
			endforeach;
		endif;
	}

	public function set($user_data=array()) {
	}

	public function edit($user_data=array()) {
	}

	public function delete($user_email='') {
	}

	function __destruct() {
		unset($this);
	}
}
?>