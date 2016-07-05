<?php
if(!extension_loaded("soap")){
	echo "carga extension";
      dl("php_soap.dll");
}
 
ini_set("soap.wsdl_cache_enabled","0");
$server = new SoapServer("aritmetica.wsdl");
 
function sumar($operando1,$operando2){
      return $operando1+$operando2;
}
 
function restar($operando1,$operando2){
      return $operando1-$operando2;
}

function multiplicar($operando1,$operando2){
      return $operando1*$operando2;
}
 
$server->AddFunction("sumar");
$server->AddFunction("restar");
$server->AddFunction("multiplicar");
$server->handle();
?>