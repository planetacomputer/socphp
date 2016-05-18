<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y."<br>"; // outputs 15

myTest();
echo $y;
?>