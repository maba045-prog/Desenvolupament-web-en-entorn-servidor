<?php
$alumnes = [
    ["nom" => "Anna", "edat" => 20, "nota" => 8.5],
    ["nom" => "Marc", "edat" => 22, "nota" => 7.2],
    ["nom" => "Júlia", "edat" => 19, "nota" => 9.1]
];

// Recórrer amb doble foreach
foreach ($alumnes as $alumne) {
    echo "Nom: " . $alumne["nom"] . ", Edat: " . $alumne["edat"] . ", Nota: " . $alumne["nota"] . "<br>";
}

/* Cada element de $alumnes és un array associatiu amb clau "nom", "edat" i "nota".

El primer foreach recorre cada alumne.

Accedim als valors amb $alumne["clau"]. 
*/
?>
