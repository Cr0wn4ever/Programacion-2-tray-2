<?php
/* Determinar si un número está dentro de un rango*/
echo '<br><hr>' . '<b>EJERCICIO 23: Determinar si un número está dentro de un rango (1-50)</b>' . '<br>';

$test = 13;


if ($test >= 1 && $test <= 50) {
    echo "<br>Este resultado se puede conseguir usando un condicional if y los operadores comparativos mayor igual '>=' y menor igual '<=' en conjunto con el operador logico &&, comprobando que $test se encuentra dentro del rango 1-50<br>";
} else {
    echo "<br><b><i>Si la condicional no se cumpliera, por ejemplo, modificando la variable '$test' que contiene el numero, se obtendria un resultado de tipo false, y saldria este mensaje.</b></i><br>";
}
