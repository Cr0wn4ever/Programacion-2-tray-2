<?php
function func2()
{

    for ($i = 1; $i <= 1000; $i++) {
        if (($i * $i) % 5 == 0 && ($i * $i) % 8 == 0 && ($i * $i) % 9 == 0) {
            echo "<br>$i x $i = " . $i * $i . "<i><b> (cumple con la condicion de ser multiplo de: 5, 8, 9)</b></i><br>";
        }
    }
}

echo "<hr><b><h2>FUNCION 0: Calcular el producto de los 1000 primeros numeros naturales y determinar cuantos de estos son multiplos de 5, 8, y 9.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func2()' Obtenemos los siguiente (POR RAZONES PRACTICAS SOLO SE IMPRIMIRAN LOS RESULTADOS QUE CUMPLAN CON LA CONDICION): </b><br>";

echo func2();
