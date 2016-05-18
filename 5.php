<?php
class Car {
	static $x = 1;
    function Car($modelo, $colore) {
        $this->model = $modelo;
        $this->color = $colore;
    }
}

// create an object
$herbie = new Car("seat", "blanc");
$herbie2 = new Car("ford", "vermell");

// show object properties
echo "HERBIE: ".$herbie->model."-".$herbie->color."<br>";
echo "HERBIE2: ".$herbie2->model."-".$herbie2->color."<br>";

$herbie2->color = "groc";
echo "HERBIE2: ".$herbie2->model."-".$herbie2->color."<br>";

echo $herbie::$x."<br>";
echo $herbie2::$x."<br>--";

//Modifico static $x des de herbie
$herbie::$x++;

//herbie2 veu el canvi de la variable static
echo $herbie2::$x."<br>";

?>