<?php
//error handler function
function customError($errno, $errstr, $error_file, $error_line, $error_context) {
  echo "<b>Error personalitzat:</b> [$errno] $errstr<br>";
  echo "<b>Error nom fitxer:</b> $error_file<br>";
  echo "<b>Error linea:</b> $error_line<br>";
  echo "<b>Error context:</b> ".print_r($error_context);
}

//set error handler
set_error_handler("customError");

$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below", E_USER_ERROR);
}


echo "hola";
?>