<?php include 'includes/header.php';

//################## sentencia preparadas

// Conectar a la BD con Mysqli.
$db = new mysqli('localhost', 'root', '', 'progresivos_bd');

// Creamos el query
$query = "SELECT IDPROGRESIVO, NOMBRE from progresivo";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($IDPROGRESIVO, $NOMBRE);

// imprimir el resultado
while($stmt->fetch()):
    echo '<pre>';
    var_dump($IDPROGRESIVO);
    var_dump($NOMBRE);
    echo '</pre>';
endwhile;



$query = "SELECT * from role";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// creamos la variable
$stmt->bind_result($ID, $ROLENAME);

// imprimir el resultado
while($stmt->fetch()):
    echo '<pre>';
    var_dump($ID);
    var_dump($ROLENAME);
    echo '</pre>';
endwhile;    

include 'includes/footer.php';