<?php
//import conexion
require("conexion.php");

$cedula = $nombre = $genero = $correo = $contrasena = "";

//obtención de datos del form
if ( $_SERVER["REQUEST_METHOD"] == "GET" ) {
    $cedula     = $_GET["cedula"];
    $nombre     = $_GET["nombre"];
    $genero     = $_GET["genero"];
    $correo     = $_GET["correo"];
    $contrasena = $_GET["contrasena"];
}

//encriptar contraseña
$contrasena = md5( $contrasena );

switch ( $genero ) {
    case "genero_masculino":
        $genero = "Masculino";
        break;
    case "genero_femenino":
        $genero = "Femenino";
        break;
    case "genero_otro":
        $genero = "Otro";
        break;
}

//guardar en base de datos
$sql = "INSERT INTO Usuario (   
    Cedula,
    Nombre,
    Genero,
    Correo,
    Contrasena
) VALUES (
    '$cedula',
    '$nombre',
    '$genero',
    '$correo',
    '$contrasena'
)";

if( mysqli_query($link, $sql) ) {
    echo "Se ha registrado exitosamente el usuario en la base de datos.";
} else {
    echo "ERROR: No se pudo ejecutar el query. " . mysqli_error($link);
}

mysqli_close($link);

?>