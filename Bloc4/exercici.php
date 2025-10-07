<?php
    $productes = [
        "Llibre" => 12.5,
        "Motxilla" => 35,
        "Bolígraf" => 1.2,
        "Carpeta" => 4.8
    ];

    $quantitats = [
        "Llibre" => 2,
        "Motxilla" => 1,
        "Bolígraf" => 5,
        "Carpeta" => 3
    ];

    //Total per productes
    function calcularSubtotals($productes, $quantitats) {

        $detall = [];

        foreach( $productes as $producte => $preu ) {
            $quantitat = $quantitats[$producte];
            $subtotal = $preu * $quantitat;

            $detall[$producte] = [
                "preu" => $preu,
                "quantitat" => $quantitat,
                "subtotal" => $subtotal
            ];
        }


        return $detall;
    }

    //Calcula total

    function calcularTotal($detall) {
        $total = 0;
        foreach ($detall as $producte) {
            $total += $producte["subtotal"];
        }
        return $total;
    }

    //Crido les funcions
    $detallCompra = calcularSubtotals($productes, $quantitats);
    $totalCompra = calcularTotal($detallCompra);
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exercici bloc 4</title>
</head>
<body>

<h2>Detall de la compra</h2>

<table>
    <thead>
        <tr>
            <th>Producte</th>
            <th>Preu unitari</th>
            <th>Quantitat</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($detallCompra as $producte => $info): ?>
            <tr>
                <td><?= $producte ?></td>
                <td><?= number_format($info["preu"], 2) ?> €</td>
                <td><?= $info["quantitat"] ?></td>
                <td><?= number_format($info["subtotal"], 2) ?> €</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total compra</td>
            <td><?= number_format($totalCompra, 2) ?> €</td>
        </tr>
    </tfoot>
</table>

</body>
</html>
