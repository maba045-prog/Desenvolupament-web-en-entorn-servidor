<?php
    require_once 'controllers/JocController.php';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Eliminar videojoc</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 40px;
            text-align: center;
        }
        .container {
            background-color: #fff;
            display: inline-block;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #d32f2f;
        }
        p {
            font-size: 16px;
            margin-bottom: 25px;
        }
        form {
            display: inline-block;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 15px;
            margin: 0 10px;
        }
        .confirmar {
            background-color: #d32f2f;
        }
        .confirmar:hover {
            background-color: #b71c1c;
        }
        .cancelar {
            background-color: #757575;
        }
        .cancelar:hover {
            background-color: #616161;
        }
    </style>
</head>
<body>

    <!-- Crido a la funció del controller a través de index.php, passant ID per paràmetre en un POST-->
    <!-- Faig servir la variable nom de la classe joc-->
     
<div class="container">
    <h1>Eliminar videojoc</h1>
    <p>Segur que vols eliminar el videojoc <strong><?php echo htmlspecialchars($joc['nom']); ?></strong>?</p>

    <form action="index.php?accio=eliminar&id=<?php echo $joc['id']; ?>" method="POST">
        <button type="submit" class="confirmar">Sí, eliminar</button>
    </form>

    <a href="index.php?accio=llistar">
        <button type="button" class="cancelar">Cancel·lar</button>
    </a>
</div>

</body>
</html>
