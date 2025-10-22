<?php
$aprovats = [];
foreach ($alumnes as $alumne) {
    if ($alumne["nota"] >= 8) {
        $aprovats[] = $alumne; // Afegir a un nou array
    }
}

// Mostrar aprovats
foreach ($aprovats as $a) {
    echo $a["nom"] . " amb nota " . $a["nota"] . "<br>";
}

/* 
Es pot crear un nou array a partir d’un array existent aplicant condicions.

Això introdueix la idea de filtrat abans de passar a fitxers CSV o base de dades. 
*/
?>
