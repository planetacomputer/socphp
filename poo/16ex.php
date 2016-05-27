<p>Confeccionar una clase abstracta Persona que tenga como atributos el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

Definir un objeto de la clase Persona y ver que error produce. También crear un objeto de la clase Empleado y llamar a sus métodos.</p>
<?php

abstract class Treballador {
	protected $nom;
	protected $sou;

	public function __construct($nom){
		$this->nom = $nom;
	}

	public function imprimir(){
		echo $this->nom."-".$this->sou;
	}

	public abstract function calcularSou($horesTreballades, $valorHora);
}

class Empleat extends Treballador{
	private $horesTreballades;
	private $valorHora;

	public function __construct($nom){
		$this->nom = $nom;
	}

	public function calcularSou($horesTreballades, $valorHora){
		$this->horesTreballades = $horesTreballades;
		$this->valorHora = $valorHora;
		$this->sou = $this->horesTreballades*$this->valorHora;
		return $this->sou;
	}

}

class Gerent extends Treballador{
	private $horesTreballades;
	private $valorHora;

	public function calcularSou($horesTreballades, $valorHora){
		$this->horesTreballades = $horesTreballades;
		$this->valorHora = $valorHora;
		$this->sou = $this->horesTreballades*$this->valorHora;
		return $this->sou;
	}

}
//Instancio empleat i li dono hores i valorHora
$empl = new Empleat("David");
$empl->calcularSou(10, 10);
$empl->imprimir();
echo "<br>";
//Instancio gerent i li dono hores i valorHora
$ger = new Gerent("Gerent");
$ger->calcularSou(20, 20);
$ger->imprimir();
?>