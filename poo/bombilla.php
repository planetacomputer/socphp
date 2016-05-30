<?php

interface Reparable{
	public function arreglar();
}

interface Encendible{ 
   	public function encender(); 
   	public function apagar(); 
}

class Bombilla implements Encendible{ 
   	public function encender(){ 
      	echo "<br>Y la luz se hizo..."; 
   	} 

   	public function apagar(){ 
      	echo "<br>Estamos a oscuras..."; 
   	} 
}

abstract class Bombilla2 implements Encendible{
	//abstract function encender();
	abstract function apagar();
}

//$bombilla = new Bombilla();
//$bombilla->encender();
?>
