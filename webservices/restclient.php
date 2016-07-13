<?php
// Point to where you downloaded the phar
include('./httpful.phar');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       
</head>
<body class="w3-container">

<h1>Posts</h1>
<?php
$uri = "http://localhost/wordpress2/wp-json/wp/v2/posts";
$response = \Httpful\Request::get($uri)->send();
?>
<ul class="w3-ul">
<?php foreach($response->body as $body): ?>
	<li class='w3-padding-16'><a target="_blank" href='<?php echo $body->link ?>'><?php echo $body->title->rendered ?>
	<?php
		$uriAutor = "http://localhost/wordpress2/wp-json/wp/v2/users/" . $body->author ;
		$responseAutor = \Httpful\Request::get($uriAutor)->send();
		
	?>

	</a> de <?php echo $responseAutor->body->name; ?>
	
<?php endforeach ?>
</ul>
</body>
</html>
