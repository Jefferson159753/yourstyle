<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión a la base de datos exitosa<br>";
}

// Verificar credenciales y obtener el rol del usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idrol = $_POST["idrol"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];

    // Realizar la consulta SQL para obtener el rol del usuario
    $query = "SELECT IDrol FROM roles WHERE IDrol = '$idrol'";
    $result = $conn->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idRol = $row['IDrol'];

            // Dependiendo del ID del rol, redirigir al panel correspondiente
            if ($idRol == 1) { // Cliente
                header('Location: panel_cliente.php');
                exit();
            } elseif ($idRol == 2) { // Trabajador
                header('Location: trabajador.php');
                exit();
            } elseif ($idRol == 3) { // Administrador
                header('Location: administrador.php');
                exit();
            } else {
                // Si el rol no es reconocido, puedes redirigir a una página de error
                header('Location: error.php');
                exit();
            }
        } else {
            // Si no se encontraron resultados, redirigir a una página de error o mostrar un mensaje
            echo "No se encontró un usuario con esas credenciales.";
        }
    } else {
        // Manejo de errores en la consulta SQL
        echo "Error al obtener el rol del usuario: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
