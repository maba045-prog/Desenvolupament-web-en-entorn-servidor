<?php

    $nom = "Marc";
    $edat_str = "21";
    $nota_float = 9.3;
    $aprovat = true;

    $edat = intval($edat_str);

    $suma_edat_nota = $edat + $nota_float;

    echo("La suma de la edat i la nota es: " . ($suma_edat_nota));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicis</title>
</head>
<body>
    <ul>
        <li>Nom: <?= $nom ?> </li>
        <li>Edat: <?= $edat ?></li>
        <li>Nota: <?= $nota_float ?></li>
        <li>Suma Edat <?= $suma_edat_nota ?></li>
    </ul>

    <?php
        if($aprovat) {
            echo "<h1> HAS APROVAT! </h1>";
        } else {
            echo "<h1> NO HAS APROVAT! </h1>";

        }
    ?>

    <h3>Mostro l'edat en String: <?= strval($edat) ?></h3>
    <h3>Mostro la nota en integer: <?= intval($nota_float) ?></h3>
    
</body>
</html>