<?php
class Cliente {
	static public $nombre_completo = 'Cliente desconocido';
	protected $id = 1001;
}

class Cliente2 extends Cliente{
	public function __construct(){
		echo $this->id;
	}
}
$cliente = new Cliente();
//print $cliente->id;
$cliente2 = new Cliente2();
?>