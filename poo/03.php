<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Menu {
  private $enlaces=array();
  private $titulos=array();
  public function cargarOpcion($en,$tit)
  {
    $this->enlaces[]=$en;
    $this->titulos[]=$tit;
  }
  public function mostrar()
  {
    for($f=0; $f < count($this->enlaces); $f++)
    {
      echo '<a href="'.$this->enlaces[$f].'" title="'.$this->titulos[$f].'">'.$this->titulos[$f].'</a>';
      //controlem que no surti el guio al final de l'array
      if($f < count($this->enlaces)-1)
        echo "-";
    }
  }
}

$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->mostrar();
echo "<hr>";

$menu2=new Menu();
$menu2->cargarOpcion('http://www.lavanguardia.com','La Vanguardia');
$menu2->cargarOpcion('http://www.elpais.es','El Pais');
$menu2->cargarOpcion('http://www.elperiodico.es','El Periodico');
$menu2->mostrar();
?>
</body>
</html>