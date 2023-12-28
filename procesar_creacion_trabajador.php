<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) 
    die("Conexión fallida: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Crear la consulta SQL para insertar un nuevo trabajador en la base de datos
    $sql = "INSERT INTO trabajador (nombre, telefono, correo, contraseña) VALUES ('$nombre', '$telefono', '$correo', '$contraseña')"; // Ajusta los campos según tu estructura de tabla

    // Verificar si la conexión se ha establecido correctamente
    if ($conn === null) {
        die("Error: No se ha establecido la conexión a la base de datos");
    }

    if ($conn->query($sql) === TRUE) {
        echo "Trabajador creado exitosamente";
    } else {
        echo "Error al crear el trabajador: " . $conn->error;
    }
}
?>
