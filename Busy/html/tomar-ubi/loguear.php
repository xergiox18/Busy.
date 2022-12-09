<?php
$ubicacion = json_decode(file_get_contents("php://input"));
$mensaje = "Timestamp: " . $ubicacion->timestamp . PHP_EOL;
$mensaje .= "Latitud: " . $ubicacion->coordenadas->latitud . PHP_EOL;
$mensaje .= "Longitud: " . $ubicacion->coordenadas->longitud . PHP_EOL . PHP_EOL;
//Aqui es donde va el codigo para insertar los datos de coordenadas en la base de datos
$lat=$ubicacion->coordenadas->latitud;
$lon=$ubicacion->coordenadas->longitud;
//$servername = "localhost";
//$database = "bussu";
//$username = "root";
//$password = "YES";

$conexion=new mysqli("localhost","root","","busy");
$conexion->set_charset("utf8");

// Crear conexion
//$conn = mysqli_connect($servername, $username, $password, $database);
// Mirar conexion
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "INSERT INTO rutas (latitud, longitud) VALUES ($lat, $lon)";
if (mysqli_query($conexion, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


file_put_contents("ubicaciones.txt", $mensaje, FILE_APPEND);

?>