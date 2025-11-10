<?php
    require_once 'controllers/JocController.php';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Editar Videojoc</title>
    <style>
        body { font-family: Arial; margin: 30px; background-color: #f9f9f9; }
        form { background-color: #fff; padding: 20px; border-radius: 8px; width: 400px; margin: 0 auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background-color: #2196F3; border: none; color: white; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #1976D2; }
    </style>
</head>
<body>

    <!-- Crido a la funció del controller a través de index.php, passant ID per paràmetre en un POST-->
    <!-- Faig servir les variables de la classe joc-->
    <!-- Amb value assigno els camps a les variables de la classe-->


<form action="index.php?accio=editar&id=<?php echo $joc['id']; ?>" method="POST">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($joc['nom']); ?>" required>

    <label for="plataforma">Plataforma:</label>
    <input type="text" name="plataforma" id="plataforma" value="<?php echo htmlspecialchars($joc['plataforma']); ?>" required>

    <label for="any_estrena">Any d'estrena:</label>
    <input type="number" name="any_estrena" id="any_estrena" value="<?php echo htmlspecialchars($joc['any_estrena']); ?>" required>

    <label for="estat">Estat:</label>
    <select name="estat" id="estat" required>
        <option value="Jugant" <?php if($joc['estat'] === 'Jugant') echo 'selected'; ?>>Jugant</option>
        <option value="Completat" <?php if($joc['estat'] === 'Completat') echo 'selected'; ?>>Completat</option>
        <option value="Pendent" <?php if($joc['estat'] === 'Pendent') echo 'selected'; ?>>Pendent</option>
    </select>
    <button type="submit">Desar canvis</button>
</form>

<div style="text-align:center; margin-top:15px;">
    <!-- Crido a la funció del controller a través de index.php-->
    <a href="index.php?accio=llistar">← Tornar al llistat</a>
</div>

</body>
</html>
