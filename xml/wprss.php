<!DOCTYPE html>
<html>
<head>
	<title>W3.CSS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
	<style type="text/css">
		.w3-lobster {
		  font-family: 'Lobster', serif;
		  font-size:36px;
		  color: #555;
		}
	</style>
</head>
<body>
	<div class="w3-container w3-blue">
	<h2>Wordpress search</h2>
	</div>
	<form class="w3-container" method="POST">
		<p>
		<label>Terme de cerca</label>
		<input name="terme" class="w3-input w3-lobster" type="text" value="<?php if(isset($_POST['terme'])) echo $_POST['terme']; ?>"></p>
		<input type="submit" class="w3-btn w3-blue"></input>
	</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'):
	echo '<hr><div class="w3-container">';
	$xml = simplexml_load_file("http://localhost/wordpress2/?s=" . $_POST['terme'] . "&feed=rss2") or die("Error: Cannot create object");
	echo "<ul class='w3-large'>";
	foreach($xml->channel->children() as $items) { 
		if(strlen($items->title)>3)
	        echo ("<li class='w3-hover-green'><a target='_blank' href=".$items->link.">". $items->title."</a></li><br>");       
	} 
	echo '</div>';
endif;
?>
