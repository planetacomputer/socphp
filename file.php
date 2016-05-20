<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
for ($i = 0; $i < 7; $i++) { 
	echo fgets($myfile)."<br>";
}

fclose($myfile);
echo "Hola";
?>