<?php
    require_once 'controllers/JocController.php';

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llista de Videojocs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
        a.boto {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 4px;
            color: white;
        }
        a.editar {
            background-color: #2196F3;
        }
        a.eliminar {
            background-color: #f44336;
        }
        a.afegir {
            display: inline-block;
            margin: 15px auto;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .centrat {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>Llista de Videojocs</h1>

    <div class="centrat">
      <a href="index.php?accio=afegir" class="afegir">Afegir Videojoc</a>
    </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Plataforma</th>
                    <th>Any estrena</th>
                    <th>Estat</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <!-- Recorro els arrays de classe joc, per recuperar la info de la BD-->

                <?php foreach ($jocs as $joc): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($joc['id']); ?></td>
                        <td><?php echo htmlspecialchars($joc['nom']); ?></td>
                        <td><?php echo htmlspecialchars($joc['plataforma']); ?></td>
                        <td><?php echo htmlspecialchars($joc['any_estrena']); ?></td>
                        <td><?php echo htmlspecialchars($joc['estat']); ?></td>

                        <!-- Enllaços amb l'ID de la classe com a variable -->
                        <td>
                            <a href="index.php?accio=editar&id=<?php echo $joc['id']; ?>" class="boto editar">Editar</a>
                        </td>
                        <td>
                          <a href="index.php?accio=eliminar&id=<?php echo $joc['id']; ?>" class="boto eliminar">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>
