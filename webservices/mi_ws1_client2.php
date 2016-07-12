<?php
 
   	require_once('nusoap-0.9.5/lib/nusoap.php');
	$cliente = new nusoap_client('http://localhost/socphp/webservices/mi_ws1.php?wsdl');//print_r($cliente);
     
    $datos_persona_entrada = array( "datos_persona_entrada" => array(    
									'nombre'    => "Mauricio A.",
									'email'     => "ealpizar@ticosoftweb.com",
									'telefono'  => "8700-5455",
									'ano_nac'   => 1980)
									);
	//print_r($datos_persona_entrada);
    $resultado = $cliente->call('calculo_edad',$datos_persona_entrada);
     
    print_r($resultado);
	
	
	if ($cliente->fault) {
 echo '<h2>Fault</h2><pre>';
 print_r($resultado);
 echo '</pre>';
} else {
 // Check for errors
 $err = $cliente->getError();
 if ($err) {
  // Display the error
  echo '<h2>Error</h2><pre>' . $err . '</pre>';
 } else {
  // Display the result
  echo '<h2>Result</h2><pre>';
  print($resultado);
  echo '</pre>';
 }
}
     
?>