<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorfons;
  private $textcolor;

  public function inicializar($tit,$ubi, $backcol, $color)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorfons = $backcol;
    $this->textcolor = $color;
  }
  public function graficar()
  {
    echo '<div style="color: '.$this->textcolor.' ;background-color: '. $this->colorfons .'; font-size:40px; text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','right', 'maroon', 'red');
$cabecera->graficar();

$cabecera2=new CabeceraPagina();
$cabecera2->inicializar('El blog del programador','center', 'blue', 'black');
$cabecera2->graficar();

$cabecera3=new CabeceraPagina();
$cabecera3->inicializar('El blog del programador','left', 'yellow', 'green');
$cabecera3->graficar();
?>
</body>
</html>