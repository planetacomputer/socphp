<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edat;

  public function inicializar($nom)
  {
    $this->nombre=$nom;
  }
  public function imprimir()
  {
    echo $this->nombre;
    echo '<br>';
    echo $this->getEdat();
    echo '<br>';
  }
  public function setEdat($edat){
    $this->edat = $edat;
  }
  public function getEdat(){
    return $this->edat;
  }
}

$per1=new Persona();
$per1->inicializar('Juan');
$per1->setEdat(23);
$per1->imprimir();

$per2=new Persona();
$per2->inicializar('Ana');
$per2->imprimir();

$per3=new Persona();
$per3->inicializar('David');
$per3->imprimir();
$per3->inicializar('Josep');
$per3->imprimir();
?>
</body>
</html>