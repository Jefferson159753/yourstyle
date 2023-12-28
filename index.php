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
        <li><a href="index.php">Inicio</a></li>
        <li><a href="login.php">Regístrate</a></li>
    </ul>
</div>

<!-- Aquí comienza tu formulario o contenido -->
<form action="procesar.php" method="post">
    <!-- Resto de tu formulario va aquí -->
</form>

</body>
</html>
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
<body>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>YourStyle - Servicios de Salón de Belleza</title>
</head>
<body>
<header style="background-color: #ADD8E6; padding: 20px;">
    <header>
        <h1>YourStyle - Servicios de Salón de Belleza</h1>
    </header>
    <main style="background-color: #F0E68C; padding: 20px;">
        <h2>Servicios</h2>

     
        <div class="servicio">
            <img src="ruta/C:\xampp\htdocs\yourstyle2\imagenes_cabello.jpg" alt="Corte de Cabello">
            <p>Precio: $15.000 COP</p>
        </div>

       
        <div class="servicio">
            <img src="C:\xampp\htdocs\yourstyle2\imagenes_tinte_de_cabello.jpg" alt="Tinte de Cabello">
            <p>Precio: $60.000 COP</p>
        </div>
<div class="text-right mb-2">
    <a href="fpdf/PruebaV.php" target="_blank" class=btn btn-success><i class="fas fa-file-pdf"></i>generar resportes</a>
</div>
       <br>
        <div class="servicio">
            <img src="ruta/C:\xampp\htdocs\yourstyle2\imagen_manicure_pedicure.jpg" alt="Manicure y Pedicure">
            <p>Precio: $80.000 COP</p>
        </div>
        <div class="servicio">
            <img src="ruta/C:\xampp\htdocs\yourstyle2\imagen_masajes.jpg" alt="Manicure y Pedicure">
            <p>Precio: $120.000 COP</p>
        </div>

        <a href="login.php" class="boton-ingresar">Inicia sesion</a>
    </main>
    <footer style="background-color: #ADD8E6; padding: 20px;">

    <footer>
    <h2>Agenda tu Cita</h2>
        <p>
            Correo: yourstyle@gmail.com<br>
            Teléfono: +57 3238025105
        </p>
    </footer>
</body>
</html>

   
   

   