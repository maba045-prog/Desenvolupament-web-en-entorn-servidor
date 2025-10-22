<?php
// funcions.php — Versió amb MySQL (nom, email, edat)

function conectarBD() {
    // Paràmetres de connexió
    $DB_HOST = 'mysql';
    $DB_NAME = 'dbMarc';
    $DB_USER = 'root';
    $DB_PASS = 'root';

    // Connexió amb PDO
    $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";
    try {
        $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        die("Error de connexió: " . $e->getMessage());
    }
}

function afegirUsuari($nom, $email, $edat) {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("INSERT INTO usuaris (nom, email, edat) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, (int)$edat]);
}

function llegirTots($taula) {
    $conn = conectarBD();
    $sql = "SELECT * FROM $taula";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function eliminarUsuari($id) {
    $pdo = conectarBD();
    $stmt = $pdo->prepare("DELETE FROM usuaris WHERE id = ?");
    $stmt->execute([$id]);
}

function editarUsuari($id_usuari, $noves_dades) {
    $pdo = conectarBD();
    $camps = [];
    $vals = [];

    if (!empty($noves_dades['nom'])) {
        $camps[] = "nom = ?";
        $vals[]  = $noves_dades['nom'];
    }

    if (!empty($noves_dades['email'])) {
        $camps[] = "email = ?";
        $vals[]  = $noves_dades['email'];
    }

    if (!empty($noves_dades['edat'])) {
        $camps[] = "edat = ?";
        $vals[]  = (int)$noves_dades['edat'];
    }

    if (empty($camps)) return;

    $vals[] = $id_usuari;

    $stmt = $pdo->prepare("UPDATE usuaris SET " . implode(', ', $camps) . " WHERE id = ?");
    $stmt->execute($vals);
}
?>
