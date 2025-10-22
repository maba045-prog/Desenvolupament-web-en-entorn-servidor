<?php
require "funcions.php";

// agafo la id del get
if(isset($_GET['id'])) {
    //elimino l'usuari amb aquella id
    eliminarUsuari($_GET['id']);
    header("Location: index.php");
    exit;
} else {
    echo "No s'ha especificat cap ID per a eliminar.";
}
?>