<?php
/* convertir grados Celsius a Fahrenheit*/
echo '<br><hr>' . '<b>EJERCICIO 16: convertir grados Celsius a Fahrenheit</b>' . '<br>';

function convertFarenheit($gradosCelsius)
{
    return ($gradosCelsius * 9 / 5) + 32;
}

echo "<br>A)19 grados celsius = " . convertFarenheit(19) . " Farenheit<br>"
    . "<br>B)32 grados celsius = " . convertFarenheit(32) . " Farenheit<br>"
    . "<br>A)23 grados celsius = " . convertFarenheit(23) . " Farenheit<br>";
