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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pie de Página con Información de Contacto</title>
    <style>
        footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<div class="menu">
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="login.php">Regístrate</a></li>
    </ul>
</div>

<!-- Aquí comienza tu formulario o contenido -->
<form action="conexion.php" method="post">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">

    <title>Iniciar Sesión - Usuario</title>
   
</head>
<body>
    
    <header>
        <h1>Iniciar Sesión - Usuario</h1>
    </header>

    <main>
        <form action="conexion.php" method="POST">
        <label for="$idrol">Si eres cliene no selecciones tu rol:</label>
    <div class="custom-select">
        <select name="idrol">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        <br>
        
        <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required 
                   title="Ingrese un número de teléfono válido de 10 dígitos"><br><br>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" minlength="5" required><br><br>

            <label for="confirmar_contrasena">Confirmar Contraseña:</label>
            <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" minlength="5" required><br><br>

            <input type="submit" value="Continuar">
            
            <!-- Botón para redirigir al formulario de registro -->
            <a href="registro.php"><button type="button">Registrarse</button></a>
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>
</main>
    <footer style="background-color: #ADD8E6; padding: 20px;">

    <footer>
    <h2>Agenda tu Cita</h2>
        <p>
            Correo: yourstyle@gmail.com<br>
            Teléfono: +57 3238025105
        </p>
    </footer
</form>

</body>
</html>
