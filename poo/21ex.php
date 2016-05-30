<?php
class Test {
	public $missatge;
	public function __construct($miss){
		$this->missatge = $miss;
		echo "construct<br>";
	}

	public function __destruct(){
		echo "destruct";
	}
}

$test = new Test("Hola");
echo $test->missatge."<br>";
?>