<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php

class Suma {
  private $valor1;
  private $valor2;
  private $resultado;
  public function cargar1($v)
  {
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function imprimirResultado()
  {
    echo "<strong>".$this->resultado.'</strong><br>';
  }

  public function operar()
  {
    $this->resultado=$this->valor1+$this->valor2; 
  }
}

class Resta {
  private $valor1;
  private $valor2;
  private $resultado;
  public function cargar1($v)
  {
    $this->valor1=$v;
  }
  public function cargar2($v)
  {
    $this->valor2=$v;
  }
  public function imprimirResultado()
  {
    echo "<strong>".$this->resultado.'</strong><br>';
  }
    public function operar()
  {
    $this->resultado=$this->valor1-$this->valor2; 
  }
}

$suma=new Suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
echo 'El resultado de la suma de 10+10 es:';
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
echo 'El resultado de la diferencia de 10-5 es:';
$resta->imprimirResultado();

?>
</body>
</html> 