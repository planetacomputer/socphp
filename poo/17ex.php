<p>Confeccionar una clase abstracta Persona que tenga como atributos el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

Definir un objeto de la clase Persona y ver que error produce. También crear un objeto de la clase Empleado y llamar a sus métodos.</p>
<?php

class Persona {
	protected $nom;
	protected $edat;

	public final function setNomIEdat($nom, $edat){
		$this->nom = $nom;
		$this->edat = $edat;
	}

	public function imprimir(){
		echo ($this->nom." ".$this->edat."<br>");
	}
}

final class Empleat extends Persona{
	private $sou;

	public function __construct($nom, $edat, $sou){
		parent::setNomIEdat($nom, $edat);
		$this->sou = $sou;
	}

	public function imprimir(){
		echo $this->sou."-";
		parent::imprimir();
	}
}

$pers = new Persona();
$pers->setNomIEdat("David", 33);
$pers->imprimir();

$empl = new Empleat("Pere", 21, 3000);
echo "<br>";
$empl->imprimir();
?>