<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	div{
		color: red;
		font-weight: bold;
	}
</style>
</head>
<body>
	<?php
	$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
	// Output one character until end-of-file
	$count = 0;
	$upcase = 0;
	echo "<span id='texto'>";
	while(!feof($myfile)) {
	  $count++;
	  $c = fgetc($myfile);
	  echo $c;
	  if(ctype_upper($c)){
	  	$upcase++;
	  }
	  
	}
	fclose($myfile);
	echo "</span>";
	echo "<div id=\"count\">Hi ha ".$count." caracters</div>";
	echo "<div id=\"count\">Hi ha ".$upcase." majuscules</div>";
	?>
	<script type="text/javascript">
		window.onload=function(){
			var countUp = 0;
			var a = document.getElementById('texto').innerHTML;
			alert(a);

			for (var i = 0;i < a.length; i++){
    			console.log(a[i]);//logs 1 for i === 0, 2 for i === 1 etc
    			if(isUpperCase(a[i])){
    				countUp++;
    			}
			}
			alert(countUp);


		};

		isUpperCase = function(char) {
  			return !!/[A-Z]/.exec(char[0]);
		};
	</script>
</body>
</html>
