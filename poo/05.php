<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $color;

  public function __construct($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    echo "Hola soy el constructor";
  }

  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('El blog del programador','left');
$cabecera->graficar();

$cabecera2=new CabeceraPagina('El blog del programador','left', 'red');
$cabecera2->graficar();
?>
</body>
</html>