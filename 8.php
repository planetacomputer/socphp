<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  //Diferencia entre pre i post increment
  $x = 0;
  if(++$x == 0){
  	echo "vertader pre<br>";
  }
  echo "pre ".$x."<br>";

  $x = 0;
  if($x++ == 0){
  	echo "vertader post<br>";
  	echo "pre ".$x;	
  }

  if(1==2){
  	echo $djsdjk;
  }
  
?>
</body>
</html>