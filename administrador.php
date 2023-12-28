<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Mostrar la información actual de la tabla administrador
$query = "SELECT * FROM trabajador";
$result = $conn->query($query);

if ($result->num_rows > 0) 

{
    echo "<h2>Información de trabajadores</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Contraseña</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['IDadmin']}</td>
                <td>{$row['Nombre']}</td>
                <td>{$row['Telefono']}</td>
                <td>{$row['Correo']}</td>
                <td>{$row['Contraseña']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron administradores.";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Administrar Trabajadores</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fffbcc; /* Fondo amarillo suave */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333; /* Color del texto */
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #ddd; /* Borde de la tabla */
            background-color: #d3eef9; /* Color celeste para la tabla */
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd; /* Borde inferior de las celdas */
        }

        th {
            background-color: #4CAF50; /* Color de fondo del encabezado */
            color: white;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Cambio de color al pasar el mouse */
        }
    </style>
</head>
<body>
</head>
<body>
    <h2>Administrar Trabajadores</h2>
    
    <!-- Botón "Crear Trabajador" -->
    <form action="creartrabajador.php">
        <input type="submit" value="Crear Trabajador">
    </form>
    
    <!-- Botón "Actualizar Trabajador" -->
    <form action="actualizartrabajador.php">
        <input type="submit" value="Actualizar Trabajador">
    </form>
    
    <!-- Botón "Eliminar Trabajador" -->
    <form action="eliminartrabajador.php">
        <input type="submit" value="Eliminar Trabajador">
    </form>
    <form action="panel_cliente.php">
        <input type="submit" value="Ver Citas">
    </form>
    <form action="Registro.php">
        <input type="submit" value="Volver a inicar sesion">
    </form>

</body>
</html>

