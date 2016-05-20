<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("d/m/y") . "<br>";
echo "Today is " . date("Y.F.d") . "<br>";
echo "Today is " . date("Y-m-d-----z--W") . "<br>";
echo "Today is " . date("l")."--" .time();

echo "The time is " . date("G:i:s")."<br>";

date_default_timezone_set("America/New_York");
echo "The time NY " . date("h:i:sa")."<br>";

date_default_timezone_set("Europe/Madrid");
echo "The time BCN " . date("h:i:sa")."<br>";
echo date_sunrise("");
date_sunset();

$d=mktime(11, 14, 54, 7, 12, 2014);
echo "Created date is " . date("d-M-Y G:i:s", $d)."<br>";

$d=strtotime("-2 Days");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+2 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$startdate = strtotime("today");
$enddate = strtotime("December 25 2016");
//Forma 1 de comptar setmanes entre dues dates
$count = 0;
while ($startdate <= $enddate) {
  $count++;
  //echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
echo $count." setmanes.<br>"; //32 setmanes

//Forma 2 de comptar setmanes entre dues dates
$d2=ceil(($enddate-time())/60/60/24/7);
echo ($enddate-time());
echo "There are " . $d2 ." weeks until 25 of Dec.";

?>

</body>
</html>