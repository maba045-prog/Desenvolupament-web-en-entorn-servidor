<?php
    echo "<h3>" . "NO HE FET EL BONUS PERQUÈ JA HAVIA MOSTRAT TOT COM ESTÀ ARA(no havia llegit lo de la llista fins al final) " . "</h3>";


    $nom = "Anna";
    $edat = 20;
    $correu = "anna@example.com";
    $telefon = "";      // cadena buida
    $nota = 7;
    $registre = null;
    $prova;

    //comprova si està definida i no és null, RETORNA 1(TRUE)//
    echo (isset($nom)) . "<p>" . "comprova si està definida i no és null, RETORNA 1(TRUE)" . "</p>";
    echo "<br>";


    //comprova si està definida i no és null, NO RETORNA RES//
    echo (isset($prova)) . "<p>" . "comprova si està definida i no és null, NO RETORNA RES" . "</p>";
    echo "<br>";

    echo (empty($telefon)) . "<p>" . "comprova si està buida, RETORNA 1(TRUE)" . "</p>" ; //comprova si està buida, RETORNA 1(TRUE)//

    echo (empty($correu)) . "<p>" . "Retorna RES (FALSE)" . "</p>" ;  //retorna RES (FALSE)//
        
    echo "<br>";

    echo (is_null($registre))  . "<p>" . "comprova si és null, RETORNA 1(TRUE)" . "</p>"; //comprova si és null, RETORNA 1(TRUE)//
    echo (is_null($telefon))  . "<p>" . "Retorna RES (FALSE)" . "</p>"; //RETORNA RES (FALSE)//

    echo "<br>";

    if ($edat > 18) {
        echo "<p>" . "ETS MAJOR D'EDAT" . "</p>";

    } else {
        echo "<p>" . "ETS MENOR D'EDAT!" . "</p>";
    }

    if ($nota < 5) {
        echo "<p>" . "HAS SUSPÈS!" . "</p>";
        
    } else if ($nota >= 5 && $nota < 7) {
        echo "<p>" . "HAS APROVAT!" . "</p>";

    } else if ($nota >= 7 && $nota < 9) {
        echo "<p>" . "HAS TRET UN NOTABLE!" . "</p>";

    } else {
        echo "<p>" . "TENS UN EXCEL·LENT!" . "</p>";

    }

    echo "<br>";

    if (empty($telefon) && (filter_var($correu, FILTER_VALIDATE_EMAIL))) {
        
        echo "<script>
            alert('El correu és vàlid i el telèfon està buit');
        </script>";
    };

    echo "<br>";

    if (is_null($registre) || empty($registre)) {
        echo "<script>
            alert('El registre és null o buit');
        </script>";
    };
?>
