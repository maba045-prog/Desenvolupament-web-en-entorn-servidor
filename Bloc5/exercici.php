<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici Bloc5</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

    <!-- Formulari per recollir dades -->
    <form method="post" action="">
        <label>Nom: 
            <input type="text" name="nom" value="<?php $nom; ?>">
        </label><br><br>

        <label>Edat: 
            <input type="number" name="edat" value="<?php $edat; ?>">
        </label><br><br>

        <label>Nombre (1-10): 
            <input type="number" name="numero" value="<?php $numero; ?>">
        </label><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php

    $error = "";

    //Funció per mostrar si es major d'edat
    function esMajorEdat ($edat) {
        if ($edat >= 18) {
            return true;

        } else {
            return false;

        }
    }

    //Funció per calcular la mitjana d'un array
    function mitjana ($notes)  {

        $suma = 0;

        for ($i = 0; $i < count($notes); $i++) {
            $suma += $notes[$i];
        }

        return $suma / count($notes);
    }

    //Comprovo si s'ha enviat el formulari

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Recullo dades form
        $nom = $_POST["nom"];
        $edat = $_POST["edat"];
        $numero = $_POST["numero"];

        //validacions

        if (empty($nom) || empty($_POST["edat"]) || empty($_POST["numero"])) {
            $error = "Tots els camps són obligatoris.";

        } elseif ($numero < 1 || $numero > 10) {
            $error = "El número per la taula ha d’estar entre 1 i 10.";
            
        }

        if ( $error == "") { 

            // mostro edat i si es major d'edat o no a partir de la funció

            echo "<p>Hola $nom, tens $edat anys.</p>";
            
            if (esMajorEdat($edat)) {
                echo "<p>Ets major d’edat.</p>";

            } else {
                echo "<p>Ets menor d’edat.</p>";

            }

            //Mostro la taula de multiplicar 

            echo "<h3>Taula de multiplicar del $numero</h3>";

            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $numero * $i;
                echo "<li>$numero x $i = $resultat</li>";
                
            }

            //Mostro el compte enrere

            echo "<h3>Compte enrere des de: $numero</h3>";


            $index = $numero;
            while ($index != 0) {

                echo "<span> $index , </span>";

                $index--;
            }
            echo "<span> $index  </span>";


            // Creo array de notes i les mostro en foreach
            $notes = [5, 7, 9];
            $ultima = end($notes);

            echo "<h3>Les notes són:</h3>";

            foreach ($notes as $nota) {

                if ($nota === $ultima) {
                    echo "<span>$nota</span>";

                } else {
                    echo "<span>$nota, </span>";

                }
            }

            //Crido a la funció mitjana i mostro resultat

            $mitjana_html = mitjana($notes);

            echo "<h2>La mitjana de les notes és: $mitjana_html </h2>";

        } else {
            echo "<p class='error'>$error</p>";

        }

    } else {
        echo "<p class='error'>$error</p>";

    }

    ?>
    
</body>
</html>