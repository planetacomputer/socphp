<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	//Si es una peticio tipus POST comprovem numero KISS
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//Obrim fitxer
		$myfile = fopen("numero.txt", "r") or die("Unable to open file!");
		$numero = fgetc($myfile);
		fclose($myfile);
		//Comparo el numero del fitxer amb el del formulari
		if($_POST["numero"] == $numero){
			echo "Has encertat!";
		}
		else{
			echo "Continua intentant-ho";
		}
	}
?>
<form method="post" action="endevinalla.php">
	<input type="number" name="numero"></input>
	<input type="submit"></input>
</form>
</body>
</html>