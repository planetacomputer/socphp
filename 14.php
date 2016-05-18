<?php 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}

$capitals = array("italia"=>"roma", "frança"=>"paris", "belgica"=>"brusel·les"); 
foreach($capitals as $key=>$value) {
    echo $key."-".$value."<br>";
}
?>