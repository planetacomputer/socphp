<?php
	require_once('aulas_model.php');
	//GET
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$aula = new Aulas();
		$aula->get($_GET['num']);
	}
	//POST
	else{
		$edit_user_data = array(
			'num'=>$_POST['num'],
			'superficie'=>$_POST['superficie'],
			'edificio'=>$_POST['edificio']
		);
		$aula = new Aulas();
		$aula->edit($edit_user_data);
		header("Location: taulaAulas.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Taula de gestió d'Aules</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<style>
		.w3-lobster {
		  font-family: "Lobster", serif;
		}
		input[readonly]{
		  background-color: rgb(235, 235, 228);
		}
		h1{
			text-align: center;
		}
		#tornarLlistat{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<h1 class="w3-lobster w3-amber w3-text-brown">Gestió d'aules</h1>
<div class="w3-container ">
<a id="tornarLlistat" class="w3-btn w3-khaki w3-border w3-border-maroon w3-round" href="taulaAulas.php"><i class="fa fa-arrow-left w3-large"></i> Tornar al llistat</a>
</div>
<div class="w3-container w3-blue">
<h2>Modificacio de l'aula</h2>
</div>

<form class="w3-container" action="modificar.php" method="post">

<p>
<label>Numero</label>
<input name="num" class="w3-input" readonly type="text" value="<?php echo $aula->num ?>"></p>

<p>
<label>Superficie</label>
<input name="superficie" class="w3-input" type="text" value="<?php echo $aula->superficie ?>"></p>

<p>
<label>Edifici</label>
<input name="edificio" class="w3-input" type="text" value="<?php echo $aula->edificio ?>"></p>

<button type="submit" class="w3-btn w3-blue">Modificar</button>
</form>
</body>
</html>