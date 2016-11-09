<?php
class Miembro {

	private $id;
	private $nombre;
	private $apellidos;
	private $fechanac;

	public function __construct($id, $nombre,$apellidos, $fechanac){
		$this->id=$id;
		$this->nombre=$nombre;
		$this->apellidos=$apellidos;
		$this->fechanac=$fechanac;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getFechanac(){
		return $this->fechanac;
	}

	public function setFechanac($fechanac){
		$this->fechanac = $fechanac;
	}
}