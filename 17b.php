<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $cognom = $_REQUEST['fcognom']; 
    if (empty($name) || empty($cognom)) {
        echo "Name or cognom are empty";
    } else {
        echo $name." ".$cognom;
    }
}
?>