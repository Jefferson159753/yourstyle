<!DOCTYPE html>
<html>
<head>
    <title>Menú con PHP</title>
    <style>
        /* Estilos para el menú */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .menu {
            background-color: #C0C0FF; /* Color celeste */
            padding: 10px;
        }
        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .menu ul li {
            display: inline;
            margin-right: 10px;
        }
        .menu ul li a {
            text-decoration: none;
            color: #000;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .menu ul li a:hover {
            background-color: #8080FF; /* Cambio de color al pasar el mouse */
        }
    </style>
</head>
<body>

<div class="menu">
    <ul>
        <li><a href="index.php">volver al Inicio</a></li>
        <li><a href="login.php">Registrarse con otros datos</a></li>
    </ul>
</div>

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
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];

    // Verificar si las contraseñas coinciden
    $confirmarContrasena = $_POST["confirmar_contrasena"];
    if ($contrasena !== $confirmarContrasena) {
        echo "Las contraseñas no coinciden";
        exit();
    }

    // Hash de la contraseña para mayor seguridad
    $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);

    // Consulta para verificar si el usuario ya existe
    $stmt = $conn->prepare("SELECT id_usuario FROM clientes WHERE nombre = ? AND telefono = ?");
    $stmt->bind_param("ss", $nombre, $telefono);
    $stmt->execute();
    $stmt->store_result();

    // Verificar si ya existe un usuario con el mismo nombre y teléfono
    if ($stmt->num_rows > 0) {
        echo "El usuario ya está registrado";
        exit();
        

    }

    $stmt->close();

    // Si el usuario no existe, proceder con la inserción
    $stmt = $conn->prepare("INSERT INTO clientes (nombre, telefono, contranseña, IDrol) VALUES (?, ?, ?, ?)");
    $IDrol = 1; // Suponiendo que un nuevo usuario registrado es un cliente, IDrol = 1

    // Vincular los parámetros y ejecutar la consulta de inserción
    $stmt->bind_param("sssi", $nombre, $telefono, $contrasenaHash, $IDrol);
    if ($stmt->execute()) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión y liberar recursos
    $stmt->close();
    $conn->close();
}
?>
