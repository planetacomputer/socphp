<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  public function inicializar($tit,$ubi)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','right');
$cabecera->graficar();

$cabecera2=new CabeceraPagina();
$cabecera2->inicializar('El blog del programador','center');
$cabecera2->graficar();

$cabecera3=new CabeceraPagina();
$cabecera3->inicializar('El blog del programador','left');
$cabecera3->graficar();
?>
</body>
</html>