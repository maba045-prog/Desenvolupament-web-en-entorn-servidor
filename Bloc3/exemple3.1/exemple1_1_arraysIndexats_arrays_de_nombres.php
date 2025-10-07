<?php
$notes = [8.5, 7.2, 9.1, 6.9, 8.8];

// Suma de totes les notes
$sum = 0;
foreach ($notes as $nota) {
    $sum += $nota;
}
echo "Mitjana: " . ($sum / count($notes));

/*
count($notes) retorna el nombre d’elements de l’array.

$sum += $nota; acumula la suma de totes les notes.
*/

?>
