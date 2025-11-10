<?php
// views/afegirJoc.php
// Formulari per afegir un nou videojoc
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Afegir Videojoc</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 30px; 
            background-color: #f9f9f9; 
        }
        h1 { 
            text-align: center; 
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #4CAF50;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .enlace {
            display: block;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

    <h1>Afegir un nou videojoc</h1>

    <!-- Crido a la funció del controller a través de index.php-->
    <!-- Faig servir la variable nom de la classe joc-->
    <!-- Amb value assigno els camps a les variables de la classe-->

    <form action="index.php?accio=afegir" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma" required>

        <label for="any_estrena">Any d'estrena:</label>
        <input type="number" id="any_estrena" name="any_estrena" min="1970" max="2100" required>

        <label for="estat">Estat:</label>
        <select id="estat" name="estat" required>
            <option value="Jugant">Jugant</option>
            <option value="Completat">Completat</option>
            <option value="Pendent">Pendent</option>
        </select>

        <button type="submit">Afegir joc</button>
    </form>

    <div class="enlace">
        <a href="index.php?accio=llistar">← Tornar al llistat</a>
    </div>

</body>
</html>
