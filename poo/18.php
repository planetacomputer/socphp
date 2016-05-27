<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class Persona {
  private $nombre;
  private $edad;
  public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);
$x=$persona1;
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $x->retornarNombre().' - '.$x->retornarEdad().'<br>';

$x->fijarNombreEdad('Ana',25);
echo 'Después de modificar los datos<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
echo 'Datos de la persona ($x):';
echo $x->retornarNombre().' - '.$x->retornarEdad().'<br>';

$persona2=clone($persona1);
$persona1->fijarNombreEdad('Luis',50);
echo 'Después de modificar los datos de persona1<br>';
echo 'Datos de la persona ($persona1):';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
echo 'Datos de la persona ($persona2):';
echo $persona2->retornarNombre().' - '.$persona2->retornarEdad().'<br>';
echo $x->retornarNombre().' - '.$x->retornarEdad().'<br>';
//Anul·lant o bé instanciant un nou objecte es desvincula $persona de $x
$persona1 = new Persona();
//$persona1 = null;
$persona1->fijarNombreEdad('Pere',40);
echo "X:".$x->retornarNombre().' - '.$x->retornarEdad().'<br>';
echo "Persona1:".$persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
?>
</body>
</html>