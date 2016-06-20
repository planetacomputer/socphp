<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "northwind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$q = $_REQUEST["q"];
$sql = "SELECT id, CompanyName, City, Country FROM customers WHERE id=" . filter_var($q);
$result = $conn->query($sql);
$outp = "";
if ($result->num_rows > 0) {
    // output data of each row
    $outp .= "<table border='1' style='width:100%; border-collapse: collapse;'>";
    while($row = $result->fetch_assoc()) {
        $outp .="<tr><td><strong>CompanyName</strong></td><td>" . $row["CompanyName"]."</td></tr>";
        $outp .= "<tr><td><strong>City</strong></td><td>" . $row["City"]."</td></tr>";
        $outp .= "<tr><td><strong>Country</strong></td><td>" . $row["Country"]."</td></tr>";

    }
    $outp .= "</table>";
} else {
    $outp .= "0 results";
}
$outp = iconv("ISO-8859-1","UTF-8",$outp);
echo $outp;
$conn->close();
?>