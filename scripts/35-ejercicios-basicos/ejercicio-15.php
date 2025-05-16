<?php
/* Generar un patrón de asteriscos*/
echo '<br><hr>' . '<b>EJERCICIO 15: Generar un patrón de asteriscos</b>' . '<br>';

$rows = 7; // Set the number of rows

// Right-angled triangle (increasing from left)
for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
}
?>