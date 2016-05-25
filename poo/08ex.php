<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Cella{
  private $texto; 
  private $colorFuente; 
  private $colorFondo;

  public function __construct($texto, $colorFuente, $colorFondo){
    $this->texto = $texto;
    $this->colorFuente = $colorFuente;
    $this->colorFondo = $colorFondo;
  }

  public function graficar(){
     echo '<td style="color:'.$this->colorFuente.';background-color:'.$this->colorFondo.'">'.$this->texto.'</td>';
  }
}

class Tabla {
  private $celles = array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor,$colorFuente,$colorFondo)
  {
    $this->celdas[$fila][$columna] = new Cella($valor, $colorFuente,  $colorFondo);
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi, $co)
  {
    $this->celdas[$fi][$co]->graficar(); 
  }

  private function finFila()
  {
    echo '</tr>';
  }

  private function finTabla()
  {
    echo '</table>';
  }

  public function graficar($color)
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
        $this->mostrar($f, $c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(2,3);
$tabla1->cargar(1, 1, "1", "yellow", "black");
$tabla1->cargar(1, 2, "2", "red", "black");
$tabla1->cargar(1, 3, "3", "red", "black");
$tabla1->cargar(2, 1, "4", "red", "black");
$tabla1->cargar(2, 2, "5", "red", "black");
$tabla1->cargar(2, 3, "6", "red", "black");
$tabla1->graficar('red');
//$tabla1->finTabla();-->ara es privat i dona error

$numfiles = 12;
$numcols = 12;
$tabla2 = new Tabla($numfiles,$numcols);
$count = 0;
for ($i = 1; $i <= $numfiles; $i++) { 
  for ($j = 1; $j <= $numcols; $j++) { 
    $tabla2->cargar($i, $j, $count, "red", "black");
    $count++;
  }
}
$tabla2->graficar('cyan');

?>
</body>
</html>