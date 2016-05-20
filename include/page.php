<?php include 'vars.php';?>
<html>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<h1>Welcome to my home page! <?php echo $car ?></h1>
<p>La suma es <?php echo suma(3, 6) ?>.</p>
<p>Some more text.</p>
<?php echo readfile("webdictionary.txt"); ?>
<?php include 'footer.php';?>
</body>
</html>