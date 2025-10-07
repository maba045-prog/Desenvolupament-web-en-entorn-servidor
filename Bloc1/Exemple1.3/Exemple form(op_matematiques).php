<?php
$nota = $_POST['nota'] ?? '0';
$nota_float = floatval($nota);

if ($nota_float >= 8) {
    echo "Aprovat!";
} else {
    echo "Suspès!";
}
?>
