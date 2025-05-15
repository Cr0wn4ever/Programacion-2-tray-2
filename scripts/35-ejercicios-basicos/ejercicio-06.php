<?php
/* Verificar si un año es bisiesto */
echo '<br><hr>' . '<b>EJERCICIO 06: Comparar tres números y decir cuál es mayor</b>' . '<br>';

$n1 = 13;
$n2 = 5;
$n3 = -1;

echo '<br>El numero mas alto entre (' . $n1 . ', ' . $n2 . ', ' . $n3 . ') es ' . max($n1, $n2, $n3) . '<br>';

echo '<br><b>OJO!</b> Para este ejercicio en particular se utilizo la funcion max() que incluye php, sin embargo, otra forma mas
rudimentaria de obtener el mismo resultado seria mediante una serie de sentencias IF ELSEIF anidados. Por razones practicas, es mas sencillo y eficiente usar
max($n1,$n2,$n3), ya que se ahorra mucho codigo y tiempo de trabajo.<br>';
