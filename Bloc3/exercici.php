<?php

    $noms = ["Anna", "Pau", "Júlia"];

    $notes = [
        "Anna"  => ["nota1" => 8, "nota2" => 9],
        "Joan"  => ["nota1" => 6, "nota2" => 7],
        "Pau"   => ["nota1" => 4, "nota2" => 5],
        "Clara" => ["nota1" => 9, "nota2" => 10],
        "Júlia" => ["nota1" => 7, "nota2" => 8]
    ];
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici Bloc 3</title>
</head>
<body>
    <h2>Alumnes que han demanat revisió</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Mitjana</th>
            <th>Resultat</th>
        </tr>

        <?php

        foreach ($noms as $alumnes) {

            $nota1 = $notes[$alumnes]["nota1"];
            $nota2 = $notes[$alumnes]["nota2"];

            $mitjana = ($nota1 + $nota2) / 2;

            // Classificació amb condicionals
            if ($mitjana < 5) {
                $resultat = "Suspès";

            } else if ($mitjana < 7) {
                $resultat = "Aprovat";

            } else if ($mitjana < 9) {
                $resultat = "Notable";

            } else {
                $resultat = "Excel·lent";

            }
            // Mostrem la fila de la taula
            echo "<tr>
                    <td>$alumnes</td>
                    <td>$nota1</td>
                    <td>$nota2</td>
                    <td>$mitjana</td>
                    <td>$resultat</td>
                </tr>";
        }
    ?>
    </table>
</body>
</html>