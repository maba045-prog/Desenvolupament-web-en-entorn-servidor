<?php
require "funcions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ID de l'usuari que estem editant
    $id_usuari = $_POST['id_usuari'];

    // Recollim les dades del formulari
    $noves_dades = [
        'nom'  => $_POST['nom'],
        'email' => $_POST['email'],
        'edat' => (int)$_POST['edat']
    ];

    // Eliminem camps buits per no modificar-los
    $noves_dades = array_filter($noves_dades, fn($v) => $v !== null && $v !== '');

    // Editar l'usuari
    editarUsuari($id_usuari, $noves_dades);

    // Redirigir a la pàgina principal
    header("Location: index.php");
    exit;
}
?>

<form method="post">
  <input type="hidden" name="id_usuari" value="<?= htmlspecialchars($_GET['id'] ?? '') ?>">

  <input name="nom" placeholder="Nom">
  <input name="email" placeholder="Correu electrònic" type="email">
  <input name="edat" placeholder="Edat" type="number">

  <button type="submit">Actualitzar Usuari</button>
</form>
