<?php
	require_once('aulas_model.php');
	$aula = new Aulas();
	$aula->delete($_GET['num']);
	header("Location: taulaAulas.php");
?>