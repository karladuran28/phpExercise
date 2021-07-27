<?php

$cedula = $nombre = $genero = $correo = $contrasena = "";

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

echo <<<END
    <h2>Registro PHP</h2>
    Se ha registrado un nuevo usuario con los siguientes datos:<br><br>
    &emsp; Cédula:      $cedula<br>
    &emsp; Nombre:      $nombre<br>
    &emsp; Género:      $genero<br>
    &emsp; Correo:      $correo<br>
    &emsp; Contraseña:  $contrasena<br>
END;

?>