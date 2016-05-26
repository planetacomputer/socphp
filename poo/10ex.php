<html>
<head>
<title>Empleat</title>
</head>
<body>
<?php
class Empleat {
  private $nom;
  private $sou;

  public function __construct($nombre, $sou=1000)
  {
    $this->nom = $nombre;
    $this->sou = $sou;
  }

  public function imprimir()
  {
    echo $this->nom." ".$this->sou;
    echo '<br>';
  }
}

$per1=new Empleat('Juan', 2000);
$per1->imprimir();

$per2=new Empleat('Pere');
$per2->imprimir();

?>
</body>
</html>