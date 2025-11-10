<?php
    require_once 'controllers/JocController.php';

    $controlador = new JocController();

    // Comprova quina acció s’ha demanat per la URL
    if (isset($_GET['accio'])) {
    $accio = $_GET['accio'];


    // Amb un switch, preparo cada get, amb id o no, per trucar a les funcions del controller
    switch ($accio) {
        case 'llista':
        $controlador->llista();
        break;
        case 'afegir':
        $controlador->afegir();
        break;
        case 'editar':
        $controlador->editar($_GET['id']);
        break;
        case 'eliminar':
        $controlador->eliminar($_GET['id']);
        break;
        default:
        $controlador->llista(); // acció per defecte
    }
    } else {
    $controlador->llista(); // si no s’especifica acció, mostra la llista
    }
?>
