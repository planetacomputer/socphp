<?php
	require_once('aulas_model.php');
	$aula5 = new Aulas();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$set_user_data = array(
			'num'=> $_POST['num'],
			'superficie'=> $_POST['superficie'],
			'edificio'=>$_POST['edificio']
		);
		//global $aula5;
		$aula5->set($set_user_data);
	}
	$aula5->listAll();
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
	</style>
</head>
<body>
<table class="w3-table-all w3-hoverable">
	  <caption><h1 class="w3-lobster w3-amber w3-text-brown">Gestió d'aules</h1></caption>
	  <tr class="w3-orange">
	    <th>Id</th>
	    <th>Numero</th> 
	    <th>Superficie</th>
	    <th>Edifici</th>
	  </tr>
	<?php foreach ($aula5->rows as $row): ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['num']; ?></td>
			<td><?php echo $row['superficie']; ?></td>
			<td><?php echo $row['edificio']; ?></td>
			<td><a class="w3-btn-block w3-khaki w3-round w3-ripple" href="modificar.php?num=<?php echo $row['num']?>"><i class="fa fa-refresh w3-large"></i> Modificar</a>
			</td>
			<td><a class="w3-btn-block w3-red w3-round w3-ripple" href="eliminar.php?num=<?php echo $row['num']?>"><i class="fa fa-trash w3-large"></i> Eliminar</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>

<form class="w3-container w3-card-4 w3-light-grey" action="taulaAulas.php" method="post">

<h2>Insertar una nova aula:</h2>

<p>
<label>Num</label>
<input class="w3-input w3-border" name="num" type="text"></p>

<p>
<label>Superficie</label>
<input class="w3-input w3-border" name="superficie" type="text"></p>

<p>
<label>Edifici</label>
<input class="w3-input w3-border" name="edificio" type="text"></p>

<button type="submit" class="w3-btn w3-brown">Insertar</button>
</form>
</body>
</html>