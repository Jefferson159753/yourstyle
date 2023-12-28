<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$nueva_contrasena = "nueva_contraseña"; // Asignar un valor a la variable
$id_trabajador = 1;
$nuevo_nombre = "";
$nuevo_correo = "";
$nueva_Contraseña = ""; // Recuerda cifrar la contraseña si es necesario

// Preparar los datos para su inserción en la consulta (especialmente importante para evitar inyección SQL)
$nuevo_nombre = $conn->real_escape_string($nuevo_nombre);
$nuevo_correo = $conn->real_escape_string($nuevo_correo);
$nueva_contrasena = $conn->real_escape_string($nueva_contrasena);

$sql = "UPDATE trabajador SET nombre = '$nuevo_nombre', correo = '$nuevo_correo', Contraseña = '$nueva_Contraseña' WHERE IDadmin = $id_trabajador";

if ($conn->query($sql) === TRUE) {
    echo "Los datos del trabajador han sido actualizados correctamente.";
} else {
    echo "Error al actualizar los datos del trabajador: " . $conn->error;
}

$conn->close();
?>
