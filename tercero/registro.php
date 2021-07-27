<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro PHP</title>
</head>
<body>
    <h2>Registro PHP</h2>
    <form action="imprimir.php" method="get">
        <table>
            <tr>
                <td>Cédula:</td>
                <td><input type="number" name="cedula"
                    min="0100000000" max="9999999999" required></td>
            </tr>
            <tr>
                <td>Nombre Cliente:</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <td>Género:</td>
                <td>
                    <select name="genero">
                        <option value="genero_masculino">Masculino</option>
                        <option value="genero_femenino">Femenino</option>
                        <option value="genero_otro">Otro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="correo" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="contrasena" 
                    pattern=".{6,}" placeholder="min. 6 caracteres" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>