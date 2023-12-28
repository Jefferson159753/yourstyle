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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Usuario</title>
    <style>
        body {
            background-color: #f0f0ff;
        }
        form {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #cfdfff;
            border-radius: 10px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Registro - Usuario</h1>
    </header>

    <main>
        <form action="registrar_usuario.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required 
                   title="Ingrese un número de teléfono válido de 10 dígitos"><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" minlength="5" required><br>

            <label for="confirmar_contrasena">Confirmar Contraseña:</label>
            <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" minlength="5" required><br>
            <span id="error_confirmacion" class="error"></span>

            <input type="submit" value="Registrarse">
        </form>
    </main>

    <footer>
        
    </footer>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            const contrasena = document.getElementById('contrasena').value;
            const confirmarContrasena = document.getElementById('confirmar_contrasena').value;

            if (contrasena !== confirmarContrasena) {
                e.preventDefault();
                document.getElementById('error_confirmacion').textContent = 'Las contraseñas no coinciden';
            }
        });
    </script>
</body>
</html>
