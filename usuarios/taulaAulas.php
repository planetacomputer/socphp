<?php
	require_once('aulas_model.php');
	$aula5 = new Aulas();
	$aula5->listAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Taula de gestió d'Aules</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
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
			<td><a class="w3-btn-block w3-khaki w3-round w3-ripple" href="modificar.php?num=<?php echo $row['num']?>">Modificar</a>
			</td>
			<td><a class="w3-btn-block w3-red w3-round w3-ripple" href="eliminar.php?num=<?php echo $row['num']?>">Eliminar</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>