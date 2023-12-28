<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourstyle"; // Cambiar al nombre de tu base de datos deseada

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicios = [
        "Corte_de_Cabello",
        "Manicure_y_Pedicure",
        "Masajes",
        "Tinte_de_Cabello"
    ];

    foreach ($servicios as $servicio) {
        for ($hora = 0; $hora < 24; $hora++) {
            for ($dia = 1; $dia <= 7; $dia++) {
                $dia_semana = date('l', strtotime("Sunday +{$dia} days"));
                $hora_inicio = sprintf("%02d:00:00", $hora);
                $hora_fin = sprintf("%02d:59:59", $hora);

                $accion = $_POST["{$servicio}_{$hora}_{$dia}"] ?? '';

                $stmt = $conn->prepare("REPLACE INTO disponibilidad_servicios (servicio, dia_semana, hora_inicio, hora_fin, accion) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $servicio, $dia_semana, $hora_inicio, $hora_fin, $accion);
                $stmt->execute();
                $stmt->close();
            }
        }
    }
}

$conn->close();
?>
