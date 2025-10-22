<?php
require "funcions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recollir dades
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $edat = (int)$_POST['edat'];

    $major_edat = false;
    //comprobo majoria d'edat

    if($edat >= 18) {
      $major_edat = true;
    }
    // Funcions.php
    afegirUsuari($nom, $email, $edat);

    // Redireccionar
    // Ho faig amb un alert de JS perquè vull que al fer clic a registrar-se et porti directe al index.php
    if ($major_edat) {
        echo "<script>
            alert('Ets major d\\'edat!!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Ets menor d\\'edat!');
            window.location.href = 'index.php';
        </script>";
    }
    exit;
}
?>

<form method="post">
  <input name="nom" placeholder="nom">
  <input name="email" placeholder="Correu electrònic" type="email">
  <input name="edat" placeholder="Edat" type="number">
  <button type="submit">Afegir Usuari</button>
</form>
