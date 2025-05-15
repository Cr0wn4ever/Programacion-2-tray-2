<?php
/* Clasificar una nota escolar */
echo '<br><hr>' . '<b>EJERCICIO 07: Clasificar una nota escolar</b>' . '<br>';

$calificaciones = [10, 14, 20, 18, 6, 11, 9, 1, 4, 17];

foreach($calificaciones as $nota){
    if($nota>=10){
        echo '<br>' . $nota . ' = APROBADO!';
    }else{
                echo '<br>' . $nota . ' = <span style="color:red;">Reprobado...</span>';
    }
}
