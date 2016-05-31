<?php
	require_once('aulas_model.php');
	$aula5 = new Aulas();
	$aula5->listAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Taula de gestio d'Aules</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<table class="w3-table-all w3-hoverable">
	  <caption>Gestió d'aules</caption>
	  <tr class="w3-red">
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
			<td>Modificar</td>
			<td><a href="eliminar.php?num=<?php echo $row['num']?>">Eliminar</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>