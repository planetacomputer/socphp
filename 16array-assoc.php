<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$arrPaisos = array("italia"=>"roma", "frança"=>"paris", "portugal"=>"lisboa", "alemanya"=>"berlin");


iterar($arrPaisos);
//Ordeno per valors
asort($arrPaisos);
?>
<br>
<?php
iterar($arrPaisos);

//Ordeno per claus
ksort($arrPaisos);
echo "<br>";
iterar($arrPaisos);


//Comprova un valor a l'array
if (in_array("roma", $arrPaisos))
  {
  echo "Match found<br>";
  }

//Comprovi una clau a l'array


echo array_search("paris", $arrPaisos)."<br>";

echo array_key_exists("italia",$arrPaisos)."<br>";

echo $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['SERVER_PORT'];


function iterar($arrPaisos){
	foreach ($arrPaisos as $key => $value) {
		echo "Pais: ".$key." - Capital: ".$value."<br>"; 
	}
}
?>
</body>
</html>