<?php
require "funcions.php";
$usuaris = llegirTots('usuaris');
?>

<h1>Llista d'usuaris</h1>
<table border="1" cellpadding="6">
  <tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Edat</th>
    <th>Accions</th>
  </tr>
  <?php foreach ($usuaris as $u): ?>
    <tr>
      <td><?= htmlspecialchars($u['nom']) ?></td>
      <td><?= htmlspecialchars($u['email']) ?></td>
      <td><?= htmlspecialchars($u['edat']) ?></td>
      <td>
        <a href="editar.php?id=<?= $u['id'] ?>">Editar</a>
        ---
        <a href="eliminar.php?id=<?= $u['id'] ?>">Eliminar</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<a href="afegir.php">Afegir nou usuari</a>
