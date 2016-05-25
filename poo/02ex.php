<html>
<head>
<title>Empleat</title>
</head>
<body>
<?php
class Empleat {
  private $nom;
  private $sou;

  public function inicializar($nombre, $sueldo)
  {
    $this->nom = $nombre;
    $this->sou = $sueldo;
  }

  public function imprimir()
  {
    echo $this->nom;
    if($this->sou > 3000){
      echo ": Ha de pagar impostos";
    }
    else{
      echo ": No ha de pagar impostos";
    }
    echo '<br>';
  }
}

$per1=new Empleat();
$per1->inicializar('Juan', 2000);
$per1->imprimir();

$per2=new Empleat();
$per2->inicializar('Pere', 4000);
$per2->imprimir();

?>
</body>
</html>