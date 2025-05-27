<?php
/* Determinar el perímetro de un rectángulo*/
echo '<br><hr>' . '<b>EJERCICIO 35: Determinar el perímetro de un rectángulo</b>' . '<br>';

$longitud = 13;
$ancho = 5;

$perimetro = round((2 * $longitud) + (2 * $ancho), 2);

echo "<br><b>Dado el rectandulo con las propiedades Longitud = $longitud Ancho = $ancho, podemos determinar que, Perimetro = $perimetro</b><br>";