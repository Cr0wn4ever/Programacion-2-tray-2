<?php
/* Comprobar si una cadena contiene una palabra específica*/
echo '<br><hr>' . '<b>EJERCICIO 22: Comprobar si una cadena contiene una palabra específica</b>' . '<br>';


$str = "Esta es mi cadena de texto basica donde verificamos si la palabra PHP existe usando una expresion regular";

$verificar = "/PHP/i";

if (preg_match($verificar, $str)) {
    echo "<br><b><i>$str</b></i><br>" . "<br><span>En este caso la palabra buscada era PHP, y puesto que la frase efectivamente tiene dicha palabra, se ve este mensaje.</span><br>";
} else {
    echo "<br><b><i>$str</b></i><br>" . "<br><span>Cambiando la frase en la variable que contiene el string quitando el PHP de la misma, se puede llegar a esta condicion, obteniendo este mensaje.
    El mismo resultado se obtendria cambiando los valores de la exresion regular.</span><br>";
}

echo "<br><b>String:</b> $str<br>"
    . "<br><b>Expresion regular:</b> $verificar<br>";
