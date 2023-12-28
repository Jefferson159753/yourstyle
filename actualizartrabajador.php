<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Trabajador</title>
    <style>
    body {
    background-color: #fffbcc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

table {
    width: 50%;
    background-color: white;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
}

h2, form {
    width: 50%;
    margin: 0 auto;
}

</style>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para mostrar la información actual de la tabla 'trabajador'
$query = "SELECT * FROM trabajador";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Mostrar los datos de los trabajadores
    echo "<h2>Información de los trabajadores:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Contraseña</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["IDadmin"] . "</td>";
        echo "<td>" . $row["Nombre"] . "</td>";
        echo "<td>" . $row["Correo"] . "</td>";
        echo "<td>" . $row["Contraseña"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Formulario para actualizar información
    echo "<h2>Actualizar información de trabajador:</h2>";
    echo "<form method='post'>";
    echo "ID del trabajador a actualizar: <input type='number' name='id_actualizar'><br>";
    echo "Nuevo nombre: <input type='text' name='nuevo_nombre'><br>";
    echo "Nuevo telefono: <input type='text' name='nuevo_telefono'><br>";
    echo "Nuevo correo: <input type='text' name='nuevo_correo'><br>";
    echo "Nueva contraseña: <input type='password' name='nueva_contrasena'><br>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";

    // Procesar la actualización de información
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_actualizar = $_POST['id_actualizar'];
        $nuevo_nombre = $_POST['nuevo_nombre'];
        $nuevo_telefono = $_POST['nuevo_telefono'];
        $nuevo_correo = $_POST['nuevo_correo'];
        $nueva_contrasena = $_POST['nueva_contrasena'];

        // Consulta para actualizar la información del trabajador
        $sql = "UPDATE trabajador SET Nombre='$nuevo_nombre', Telefono='$nuevo_', Correo='$nuevo_correo', Contraseña='$nueva_contrasena' WHERE IDadmin=$id_actualizar";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Información actualizada correctamente.</p>";
        } else {
            echo "Error al actualizar la información: " . $conn->error;
        }
    }
} else {
    echo "No se encontraron trabajadores.";
}

$conn->close();
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesamiento de tu formulario aquí...

    // Después de procesar el formulario, redirigir a administrador.php
    header("Location: administrador.php");
    exit(); // Asegura que el código se detenga después de la redirección
}
?>
<form action="administrador.php">
    <input type="submit" value="Volver">
</form>
