<?php
// include and register Twig auto-loader
include 'Twig/Autoloader.php';
include 'Miembro.php';
Twig_Autoloader::register();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_empl";

try {
  // define template directory location
  $loader = new Twig_Loader_Filesystem('templates');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader);
  
  // load template
  $template = $twig->loadTemplate('listado.tmpl');

  $persona = new Miembro('1', 'jose', 'garcia', '2102-12-12');


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 


  //Si es POST es crea un nou registre
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $nom = test_input($_POST["nom"]);
      $cognom = test_input($_POST["cognom"]);
      $datanaix = test_input($_POST["datanaix"]);

    $sql = "INSERT INTO empleados (nombre, apellidos, fechanac)
    VALUES ('".$nom."', '".$cognom."', '".$datanaix."')";

    if ($conn->query($sql) === TRUE) {
        echo "Se ha creado un nuevo registro";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  $miembros = array();
  //Sempre mostra el llistat d'empleats
  $sql = "SELECT id, nombre, apellidos, fechanac FROM empleados ORDER BY id DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $miembro = new Miembro($row["id"], $row["nombre"], 
        $row["apellidos"], $row["fechanac"]);
        array_push($miembros, $miembro);
    }
  }

  // set template variables
  // render template
  echo $template->render(array (
    'a' => 3, 'miembros' => $miembros
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
finally{
  $conn->close();
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>