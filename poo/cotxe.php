<?php
require_once("bombilla.php");
//PHP suporta la implementació de MULTIPLES interficies
class Coche implements Encendible, Reparable{ 
   	private $gasolina; 
   	private static $bateria = 3; 
   	private $estado = "apagado"; 

   	function __construct(){ 
      	$this->gasolina = 0;  
   	} 

      public function arreglar(){
         echo "apreto tuercas";
      }

   	public function encender(){  
      	if ($this->estado == "apagado"){ 
         	if (self::$bateria > 0){ 
            	if ($this->gasolina > 0){ 
               	$this->estado = "encendido"; 
               	self::$bateria --; 
               	echo "<br><b>Enciendo...</b> estoy encendido!"; 
            	}else{ 
               	echo "<br>No tengo gasolina"; 
            	} 
         	}else{ 
            	echo "<br>No tengo batería"; 
         	} 
      	}else{ 
         	echo "<br>Ya estaba encendido"; 
      	} 
   	} 

   	public function apagar(){ 
      	if ($this->estado == "encendido"){ 
         	$this->estado = "apagado"; 
         	echo "<br><b>Apago...</b> estoy apagado!"; 
      	}else{ 
         	echo "<br>Ya estaba apagado"; 
      	} 
   	} 

   	public function cargar_gasolina($litros){ 
      	$this->gasolina += $litros; 
      	echo "<br>Cargados $litros litros"; 
   	} 
      public static function getBateria(){
         return self::$bateria;
      }
}

$coche = new Coche();
$coche->cargar_gasolina(11);
$coche->encender();

$coche2 = new Coche();
$coche2->cargar_gasolina(11);
$coche2->encender();

$coche3 = new Coche();
$coche3->cargar_gasolina(11);
$coche3->encender();

//Aqui $bateria ja és igual a 0
echo Coche::getBateria();
$coche4 = new Coche();
$coche4->cargar_gasolina(11);
$coche4->encender();

//Poliformisme
function enciende_algo (Encendible $algo){ 
      $algo->encender();
} 

$mibombilla = new Bombilla(); 
$micoche = new Coche(); 
echo "<br>---------------------";
enciende_algo($mibombilla); 
enciende_algo($micoche);
?>