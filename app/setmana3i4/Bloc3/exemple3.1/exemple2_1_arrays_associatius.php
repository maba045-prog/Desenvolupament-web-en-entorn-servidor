<?php
$alumne = [
    "nom" => "Anna",
    "edat" => 20
];

// Accedir als valors
echo $alumne["nom"];  // Mostra "Anna"
echo $alumne["edat"]; // Mostra 20

// Afegir una nova clau
$alumne["curs"] = "DAM";

/*
$alumne["nom"] accedeix al valor associat a la clau "nom".
Es poden afegir noves claus en qualsevol moment.
*/


?>
