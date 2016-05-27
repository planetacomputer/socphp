<?php
class Cuadrado{
	public $lado;
	public function setLado($lado){
		$this->lado = $lado;
	}

	public function perimetro(){
		return $this->lado*4;
	}

	public function superficie(){
		return $this->lado*$this->lado;
	}
}

$cuadrado = new Cuadrado();
$cuadrado->setLado(5);

$cuadrado2 = $cuadrado;
echo "Dades de cuadrado2:<br>";
echo "Sup.".$cuadrado2->superficie()."<br>";
echo "Per.".$cuadrado2->perimetro()."<br>";

?>