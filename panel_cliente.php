<!DOCTYPE html>
<html>

<head>
    <title>Botón Volver con PHP</title>
</head>

<body>

    <?php
    // Verifica si el botón "Volver" ha sido presionado
    if (isset($_POST['volver'])) {
        // Redirige a la página index.php
        header("Location: index.php");
        exit; // Asegura que el script se detenga después de la redirección
    }
    ?>

    <form method="post">
        <!-- Botón para volver -->
        <input type="submit" name="volver" value="Volver al inicio">
    </form>

</body>

</html>
<br>
<form method="post" action="panelCinfo.php">
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
        <title>Servicios Disponibles</title>
        <style>
            /* Estilos CSS */
        </style>
    </head>

    <body>
        <h1>Servicios Disponibles</h1>

        <form method="post">
            <?php
            $nombres_servicios = [
                "Corte de Cabello",
                "Manicure y Pedicure",
                "Masajes",
                "Tinte de Cabello"
            ];

            foreach ($nombres_servicios as $servicio) {
                echo "<table>";
                echo "<caption>$servicio</caption>";
                echo "<tr><th></th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";

                for ($hora = 0; $hora < 24; $hora++) {
                    echo "<tr>";
                    echo "<td>$hora:00 - " . ($hora + 1) . ":00</td>";

                    for ($dia = 1; $dia <= 7; $dia++) {
                        echo "<td>";
                        echo "<select name='{$servicio}_{$hora}_{$dia}'>";
                        echo "<option value='agendada'>Agendada</option>";
                        echo "<option value='disponible'>Disponible</option>";
                        echo "</select>";
                        echo "</td>";
                    }

                    echo "</tr>";
                }

                echo "</table>";
            }
            ?>

            <input type="submit" value="Guardar Disponibilidad">
        </form>
        <button onclick="capturarPantalla()">Generar reporte</button>

        <!-- <script>
    function descargarPagina() {
        // Obtener el contenido HTML de la página actual
        var contenidoPDF = document.documentElement.outerPDF;

        // Crear un Blob (objeto binario) con el contenido HTML
        var blob = new Blob([contenidoPDF], { type: 'PDF' });

        // Crear un objeto URL para el Blob
        var url = window.URL.createObjectURL(blob);

        // Crear un enlace <a> para descargar el archivo
        var enlaceDescarga = document.createElement('a');
        enlaceDescarga.href = url;
        enlaceDescarga.download = 'pagina.PDF'; // Nombre del archivo a descargar
        enlaceDescarga.style.display = 'none';

        // Agregar el enlace al cuerpo del documento
        document.body.appendChild(enlaceDescarga);

        // Simular un clic en el enlace para iniciar la descarga
        enlaceDescarga.click();

        // Eliminar el enlace del cuerpo del documento
        document.body.removeChild(enlaceDescarga);
    }
</script> -->

<!-- hola soy ronal -->
        <script>
            function capturarPantalla() {
                // Capturar la imagen de la pantalla usando html2canvas
                html2canvas(document.body).then(function (canvas) {
                    // Crear un enlace <a> para descargar la imagen
                    var enlaceImagen = document.createElement('a');
                    enlaceImagen.href = canvas.toDataURL('image/png');
                    enlaceImagen.download = 'captura.png'; // Nombre del archivo a descargar
                    enlaceImagen.style.display = 'none';

                    // Agregar el enlace al cuerpo del documento
                    document.body.appendChild(enlaceImagen);

                    // Simular un clic en el enlace para iniciar la descarga
                    enlaceImagen.click();

                    // Eliminar el enlace del cuerpo del documento
                    document.body.removeChild(enlaceImagen);
                });

                // Abrir la ventana de impresión
                window.print();
            }
        </script>
        <footer>
            <p>Necesitas ayuda? Contáctanos</p>
            <p>Correo: yourstyle@gmail.com</p>
            <p>Teléfono: +573238025105</p>
        </footer>
    </body>

    </html>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Servicios Disponibles</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #ffffcc;
                /* Fondo amarillo suave */
                margin: 0;
                padding: 0;
            }

            h1 {
                text-align: center;
                margin-top: 20px;
            }

            form {
                width: 80%;
                margin: 20px auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table caption {
                font-weight: bold;
                margin-bottom: 10px;
            }

            th,
            td {
                border: 1px solid #99ccff;
                /* Borde celeste */
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: #ccf5ff;
                /* Color celeste */
            }

            select {
                width: 100%;
                padding: 5px;
            }

            input[type="submit"] {
                display: block;
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                background-color: #ccf5ff;
                border: none;
                cursor: pointer;
                font-size: 16px;
            }

            footer {
                background-color: #ccf5ff;
                /* Color celeste */
                text-align: center;
                padding: 10px 0;
                width: 100%;
                position: fixed;
                bottom: 0;
                left: 0;
            }
        </style>
    </head>

    <body>
        <h1>Servicios Disponibles</h1>

        <form method="post">
            <?php
            // Tu código PHP para generar las tablas y formularios
            ?>

            <input type="submit" value="Guardar Disponibilidad">
        </form>

        <footer>
            <p>Necesitas ayuda? Contáctanos</p>
            <p>Correo: yourstyle@gmail.com</p>
            <p>Teléfono: +573238025105</p>
        </footer>
    </body>

    </html>