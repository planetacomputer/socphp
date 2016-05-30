<?php 
class Contador{
	public static $contador = 0;
	public $nom;

	public function __construct($nom){
		$this->nom = $nom;
		self::$contador++;
	}
	public function getNom(){
		echo $this->nom;
	}
}

$a = new Contador("a");
$a->getNom();
echo "<br>";
$b = new Contador("b");
$b->getNom();
echo "<br>";
$c = new Contador("c");
$c->getNom();
echo "<br>";

echo "Nombre d'instancies creades: ".Contador::$contador;
echo "Nombre d'instancies creades: ".$a::$contador++;
echo "Nombre d'instancies creades: ".Contador::$contador;
echo "Nombre d'instancies creades: ".$b::$contador;
?>