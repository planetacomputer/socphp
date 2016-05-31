<!DOCTYPE html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	require_once('aulas_model.php');

	$aula = new Aulas();
	$aula->get($_POST['num']);
	if($aula->id != "")
		print $aula->id . ' ' . $aula->num . "-" .$aula->superficie .'m2 ha sido recuperado de ledifici '.$aula->edificio."<br>";
}

?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="formulari.php" method="post">
	<input name="num" type="number"></input>
	<input type="submit"></input>
</form>
</body>
</html>