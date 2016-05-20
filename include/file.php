<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
for ($i = 0; $i < 7; $i++) { 
	echo "hola";
	//echo fgets($myfile);
}
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");


fclose($myfile);
?>