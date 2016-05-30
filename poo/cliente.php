<?php
class Cliente {
	static public $nombre_completo = 'Cliente desconocido';
	protected $id = 1001;

	static function hola(){
		echo "hola";
	}
	function __construct() {
		self::$nombre = 'Juan Pérez';
	}
}
print Cliente::$nombre_completo;
print Cliente::hola();
?>