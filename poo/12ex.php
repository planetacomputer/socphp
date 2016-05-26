<?php

class Persona {
	protected $nom;
	protected $edat;

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setEdat($edat){
		$this->edat = $edat;
	}

	public function imprimir(){
		echo ($this->nom." ".$this->edat."<br>");
	}
}

class Empleat extends Persona{
	private $sou;

	public function setSou($sou){
		$this->sou = $sou;
	}
	public function imprimirSou(){
		echo  $this->sou."<br>".$this->getNom();
	}
}

$pers = new Persona();
$pers->setNom("David");
$pers->setEdat(33);
$pers->imprimir();

$empl = new Empleat();
$empl->setNom("Pere");
echo "Nombre:" .$empl->getNom()."<br>";
$empl->edat = 21;
$empl->setEdat(19);
$empl->setSou(2000);
$empl->imprimir();
$empl->imprimirSou();


?>