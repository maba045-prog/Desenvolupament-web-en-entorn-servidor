<?php
$alumnes = ["Anna", "Marc", "Júlia", "Pau", "Clara"];

// Accedir al primer element
echo $alumnes[0]; // Mostra "Anna"

// Afegir un element
$alumnes[] = "Oriol";

// Recórrer amb foreach
foreach ($alumnes as $nom) {
    echo $nom . "<br>";
}

/*
$alumnes[0] accedeix al primer element.

$alumnes[] = "Oriol"; afegeix un element al final.

foreach ($alumnes as $nom) recorre tots els elements de l’array.
*/
?>
