<?php
/* Calcular el área de un triángulo*/
echo '<br><hr>' . '<b>EJERCICIO 17: Calcular el área de un triángulo</b>' . '<br>';

function calcArea($base, $altura)
{
    return ($base * $altura) / 2;
}


echo "<br>A)Base: 5 Altura: 13 = " . calcArea(5, 13) . "<br>"
    . "<br>B)Base: 4 Altura: 10 = " . calcArea(4, 10) . "<br>"
    . "<br>A)Base: 5 Altura: 5 = " . calcArea(5, 5) . "<br>";
