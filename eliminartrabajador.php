<!DOCTYPE html>
<html>
<head>
    <title>Lista de Trabajadores</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fffbcc; /* Fondo amarillo suave */
        }
       table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #FFF0FFFF ;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-button {
            display: block;
            width: 150px;
            margin: 20px auto;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los trabajadores
$sql = "SELECT IDadmin, Nombre, Correo, Contraseña FROM trabajador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Contraseña</th><th>Acción</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["IDadmin"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Correo"] . "</td>";
        echo "<td>" . $row["Contraseña"] . "</td>";
        echo "<td><form method='post'>";
        echo "<input type='hidden' name='id' value='" . $row["IDadmin"] . "'>";
        echo "<input type='submit' value='Eliminar'></form></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron trabajadores.";
}

// Procesar la eliminación del trabajador
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Preparar la consulta SQL para eliminar el trabajador por su ID
    $sql_delete = "DELETE FROM trabajador WHERE IDadmin = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Trabajador eliminado exitosamente.";
        header("Refresh:0"); // Actualiza la página después de la eliminación
    } else {
        echo "Error al eliminar el trabajador: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<form action="administrador.php">
    <input type="submit" value="Volver">
</form>
</body>
</html>
