<?php
	require_once('nusoap-0.9.5/lib/nusoap.php');
	$cliente = new nusoap_client('mi_ws1.php');
    //print_r($cliente);
	$datos_persona_entrada = array("datos_persona_entrada" => array('nombre' => "Mauricio A.",'email' => "ealpizar@ticosoftweb.com",'telefono','ano_nac'=> 1980));
    $resultado = $cliente->call('calculo_edad',$datos_persona_entrada);
	print_r($resultado);
?>