<?php
/* Suma de los primeros 100 números naturales */
echo '<br><hr>' . '<b>EJERCICIO 12: Suma de los primeros 100 números naturales</b>' . '<br>';

$aux = 1;

for ($i = 0; $i < 100; $i++) {
    $sumatoria = $i + $aux;
    echo "<br>$i + $aux = $sumatoria<br>";
    $aux++;
}

$formula = (100 * (100 + 1) / 2);

echo "<br>Resultado: $sumatoria <br><b>Claro esta que esto fue lo que yo entendi dado el problema, pero hay otra forma de resolver este ejercicio, y es haciendo la sumatoria de los 100 primeros
numeros naturales con la formula (n * (n + 1)) / 2 y claramente el resultado es diferente, ya que el enfoque es diferente.<br></b>
Si tomamos la formula para calcular la sumatoria de los 100 primeros terminos y la adaptamos a nuestro problema '(100*(100+1)/2)', el resultado seria: $formula";
