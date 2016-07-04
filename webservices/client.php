<?php
try{
 $clienteSOAP = new SoapClient('aritmetica.wsdl');
 
 $resultado_suma = $clienteSOAP->sumar(1.7, 3.5);
 $resultado_resta = $clienteSOAP->restar(1.7, 3.5);
 
 echo "la suma de 1.7 mas 3.5 es: " . $resultado_suma . "<br/>";
 echo "la diferencia de 1.7 menos 3.5 es: " . $resultado_resta . "<br/>";
 
} catch(SoapFault $e){
	echo "nos e";
 	var_dump($e);
}
?>