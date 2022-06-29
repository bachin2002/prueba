<?php include 'includes/header.php';

//################## sentencia preparadas , no podran hacer inyeciones sql , no se va a poder hakear#####################################

// Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=progresivos_bd', 'root', '');

// Creamos el query
$query = "SELECT * from progresivo";

// Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->fetchAll( PDO::FETCH_ASSOC );

// Iterar
foreach($resultado as $propiedad):
    echo '<pre>';
    echo $propiedad['IDPROGRESIVO'];
    echo "<br>";
    echo $propiedad['NOMBRE'];
    echo "<br>";
    echo $propiedad['ORIGEN'];
    echo "<br>";
    echo '</pre>';
endforeach;


include 'includes/footer.php';