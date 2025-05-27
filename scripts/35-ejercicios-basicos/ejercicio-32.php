<?php
/* Calcular el volumen de un cilindro*/
echo '<br><hr>' . '<b>EJERCICIO 32: Calcular el volumen de un cilindro</b>' . '<br>';

$radio = 5;
$altura = 13;

$volumen = round(pi() * pow($radio, 2) * $altura, 2);

echo "<br><b>Dados los valores Radio = $radio y Altura = $altura, tenemos que el volumen del cilindro es de: $volumen</b><br>";
