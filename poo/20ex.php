<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Trabajador {
  protected $nombre;
  protected $sueldo;
  public function __construct($nom,$sue)
  {
    $this->nombre=$nom;
    $this->sueldo=$sue;
  }
  public function retornarSueldo()
  {
    return $this->sueldo;
  }
  public function retornarNombre(){
    return $this->nombre;
  }
} 

class Empleado extends Trabajador {
}

class Gerente extends Trabajador {
}

$juan = new Empleado('juan',1200);
$vec[] = $juan;
$vec[] = new Gerente('marcos',82000);
$vec[] = new Empleado('ana',1000);

$vec[] = new Gerente('jorge',2500);
$vec[] = new Gerente('carlos',103300);
$vec[] = new Empleado('carlos',1323300);

$souMaxGerent = 0;
for($f = 0; $f < count($vec);$f++){
    if ($vec[$f] instanceof Gerente){
      if($vec[$f]->retornarSueldo() > $souMaxGerent){
        $souMaxGerent = $vec[$f]->retornarSueldo();
        $maxGerent = $vec[$f];
      }
    }
}
echo 'El gerent que mes cobra es:'.$maxGerent->retornarNombre().'-'.$maxGerent->retornarSueldo().'<br>';


?>
</body>
</html> 