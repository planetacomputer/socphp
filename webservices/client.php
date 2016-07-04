<?php
try{
 $clienteSOAP = new SoapClient('aritmetica.wsdl');
 $a = $_REQUEST['a'];
 $b = $_REQUEST['b'];
 $resultado_suma = $clienteSOAP->sumar($a, $b);
 $resultado_resta = $clienteSOAP->restar($a, $b);
 
 echo "la suma de $a mas $b es: " . $resultado_suma . "<br/>";
 echo "la diferencia de $a menos $b es: " . $resultado_resta . "<br/>";
 
} catch(SoapFault $e){
	echo "nos e";
 	var_dump($e);
}
?>