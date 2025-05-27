<?php
/* Calcular el promedio de tres calificaciones*/
echo '<br><hr>' . '<b>EJERCICIO 34: Calcular el promedio de tres calificaciones</b>' . '<br>';

$calificaciones = [4, 5, 4];

$promedio = ($calificaciones[0] + $calificaciones[1] + $calificaciones[2]) / 3;

if ($promedio > 6) {
        echo "<br><h2>FELICIDADES, ES USTED UN ESTUDIANTE DESTACADO<br></h2>";
} else {
    echo "<br><h2>DEBES SEGUIR ESTUDIANDO, VAMOS BIEN<br></h2>";
}
