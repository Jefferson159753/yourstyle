<?php
require_once __DIR__ . '/vendor/autoload.php'; // Ruta al archivo autoload.php de Composer
use Mpdf\Mpdf;

// Verificar si se envió el formulario para generar el PDF
if (isset($_POST['generar_pdf'])) {
    // Generar el contenido HTML del formulario
    ob_start();
    include 'ruta_a_tu_formulario.php'; // Reemplaza 'ruta_a_tu_formulario.php' por la ruta de tu formulario PHP/HTML
    $html = ob_get_clean();

    // Crear una instancia de mPDF
    $mpdf = new Mpdf();

    // Establecer el contenido HTML
    $mpdf->WriteHTML($html);

    // Generar el archivo PDF
    $mpdf->Output('formulario.pdf', 'D'); // Descargar el PDF con el nombre 'formulario.pdf'
    exit; // Terminar el script después de generar el PDF
}
?>

<!-- Agrega este formulario para generar el PDF -->
<form method="post">
    <input type="submit" name="generar_pdf" value="Generar PDF">
</form>
