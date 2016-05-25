<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Tabla {
  private $mat=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)
  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor)
  {
    $this->mat[$fila][$columna]=$valor;
  }

  private function inicioTabla()
  {
    echo '<table border="1">';
  }
    
  private function inicioFila()
  {
    echo '<tr>';
  }

  private function mostrar($fi, $co, $color)
  {
    echo ((hexdec($color)+15)."-");
    for ($i=(hexdec($color)); $color < 10000; $color = $color + 150) { 
      echo '<td style="background-color: '.($color).'">'.$this->mat[$fi][$co].'</td>';
    }
    
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
        $this->mostrar($f, $c, $color);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(2,3);
$tabla1->cargar(1,1,"1");
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"3");
$tabla1->cargar(2,1,"4");
$tabla1->cargar(2,2,"5");
$tabla1->cargar(2,3,"6");
$tabla1->graficar('red');
//$tabla1->finTabla();-->ara es privat i dona error

$numfiles = 12;
$numcols = 12;
$tabla2 = new Tabla($numfiles,$numcols);
$count = 0;
for ($i = 1; $i <= $numfiles; $i++) { 
  for ($j = 1; $j <= $numcols; $j++) { 
    $tabla2->cargar($i, $j, $count);
    $count++;
  }
}
$tabla2->graficar('cyan');

?>
</body>
</html>