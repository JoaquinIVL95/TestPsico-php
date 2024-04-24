<?php
$respuestas = array();
$num_preguntas = 14; // Número de preguntas

// Obtener respuestas del formulario y sumar los valores
for ($i = 0; $i < $num_preguntas; $i++) {
    $respuesta = $_POST["respuesta{$i}"];
    $respuestas[] = intval($respuesta); // Convertir la respuesta a entero antes de sumar
}

// Sumar los valores de las respuestas
$total = array_sum($respuestas);

// Mostrar el total
echo "<p>El total de las respuestas es: {$total}</p>";
?>
