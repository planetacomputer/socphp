<!DOCTYPE html>
<html>
<body>

<?php
// Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Notificar todos los errores excepto E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING."<br>";

function hola(){
	echo GREETING;
	echo 3/0;
}
hola();
define("GREETING", "sdfasdfa!");
echo GREETING;
?> 

</body>
</html>