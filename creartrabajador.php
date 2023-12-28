<!DOCTYPE html>
<html>
<head>
    <title>Crear Trabajador</title>
</head>
<body>
    <h2>Crear Trabajador</h2>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fffbcc; /* Fondo amarillo suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ajustar la altura al tamaño de la ventana */
        }

        h2 {
            text-align: center;
            font-size: 36px;
            color: #333; /* Color del texto */
            margin-top: 0;
            margin-bottom: 20px;
        }

        form {
            width: 50%;
            padding: 20px;
            background-color: #d3eef9; /* Color celeste */
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2); /* Sombra suave */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr td {
            padding: 8px;
            border-bottom: 1px solid #ddd; /* Borde inferior de las celdas */
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 20px); /* Ancho del 100% menos el espacio del padding */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Color de botón */
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049; /* Cambio de color al pasar el mouse */
        }
    </style>
</head>
<body>
    <form action="procesar_creacion_trabajador.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Teléfono: <input type="text" name="telefono"><br>
        Correo: <input type="text" name="correo"><br>
        Contraseña: <input type="password" name="contraseña"><br>
       <input type="submit" value="Crear Trabajador">
    </form>
    <form action="administrador.php">
    <input type="submit" value="Volver">

</body>
</html>
