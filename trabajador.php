<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de Clientes</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #f0f5f9; /* Color de fondo */
            margin: 0;
            padding: 20px;
        }
        
        .container {
            background-color: #cce5ff; /* Color celeste */
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .container h2 {
            margin-bottom: 10px;
        }

        .cliente-info {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #cce5ff; /* Color celeste */
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
       
 }
    </style>
</head>
<body>

    <div class="container">
        <h2>Información de Clientes</h2>
<?php
// session_start(); // Iniciar sesión

// // Verificar si el trabajador está autenticado
// if (!isset($_SESSION["idrol"]) || $_SESSION["idrol"] != 2) {
//     header('Location: acceso_denegado.php'); // Redirigir si no hay sesión de trabajador o si no es trabajador
//     exit();
// }

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

// Consulta para obtener la información de los clientes
$query = "SELECT * FROM clientes";
$result = $conn->query($query);

// Mostrar la información de los clientes
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_usuario"] . " - Nombre: " . $row["nombre"] . " - Teléfono: " . $row["telefono"] . "<br>";
        // Mostrar otros detalles si es necesario
    }
} else {
    echo "No se encontraron clientes.";
}

// Cerrar la conexión
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Botón Ver Citas</title>
</head>
<body>
    <!-- Botón que dirige a panel_cliente.php -->
    
</body>
</html>
</div>

<form action="panel_cliente.php">
    <input type="submit" value="Ver Citas">
</form>

</body>
</html>