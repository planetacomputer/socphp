<?php
// Start the session
session_start();
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('numbers.tmpl');

  // generate random number and
  // check whether odd or even
  $num = rand (0,30);
  if(!isset($_SESSION["numbers"])){
    $arrNumbers = array(); 
  }
  else{
    $arrNumbers = $_SESSION["numbers"];
  }
  array_push($arrNumbers,$num);
  $_SESSION["numbers"]  = $arrNumbers;
  
  $div = ($num % 2);

  // set template variables
  // render template
  echo $template->render(array (
    'num' => $num,
    'div' => $div,
    'numbers' => array_reverse($_SESSION["numbers"])
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>