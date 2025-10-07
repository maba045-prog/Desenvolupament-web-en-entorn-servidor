<?php
    $dia = "dilluns";

    switch ($dia) {
        case "dilluns":
            echo "Avui comença la setmana.";
            break;
        case "divendres":
            echo "Avui acaba la setmana laboral.";
            break;
        default:
            echo "Un dia qualsevol.";
    }
?>