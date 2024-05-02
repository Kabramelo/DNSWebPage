<?php
$filename = '/etc/bind/asixhub.local.zone'; // Reemplaza con la ruta real a tu archivo
$startLine = 14; // Número de línea para empezar

$file = fopen($filename, 'r'); // Abrir el archivo en modo lectura

if ($file) {
    $currentLine = 0; // Variable para llevar el seguimiento del número de línea actual

    while (($line = fgets($file)) !== false) {
        $currentLine++; // Incrementar el número de línea actual

        if ($currentLine < $startLine) {
            continue; // Saltar las líneas hasta que se alcance la línea deseada
        }

        $words = preg_split('/\s+/', trim($line)); // Dividir la línea en palabras

        if (!empty($words)) {
            $firstWord = $words[0]; // Obtener la primera palabra

            echo $firstWord . "\n"; // Imprimir la primera palabra con un salto de línea
        }
    }

    fclose($file); // Cerrar el archivo
} else {
    echo "No se pudo abrir el archivo.";
}
?>

