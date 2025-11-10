<?php
    //importo lo de la db.php en aquest cas, vull el pdo
    require __DIR__ . '/../config/db.php';

    class jocModel {

        private PDO $pdo;

        // Amb el constructor em connecto a la BD fent servir el getter
        public function __construct() {
            $db = new Database();           // creem Database
            $this->pdo = $db->getConnection(); // agafem el PDO real
        }

        function llegirJocs() {
            //preparo la consulta
            $sql = "SELECT * FROM videojocs ORDER BY nom";
    
            // Preparo el statement, evitant injeccions
            $stmt = $this->pdo->prepare($sql);
    
            //en la següent línia es crea la consulta,
            // En execute es posen els parametres de per afegir dades de manera segura
            // però en aquest cas no cal
            $stmt->execute();
    
            //Ara recullo les dades amb fetchall ja que espero molts arrays
            $resultat = $stmt->fetchAll();
    
            return $resultat; 
        }

        function llegirJocPerId($id) {
            //preparo la consulta
            $sql = "SELECT * FROM videojocs WHERE id = :id";
    
            // Preparo el statement, evitant injeccions
            $stmt = $this->pdo->prepare($sql);
    
            //en la següent línia es crea la consulta,
            $stmt->execute([
                ':id' => $id
            ]);

            //Ara recullo les dades amb fetch ja que nomes es 1 array
            return $stmt->fetch();
        }
    
        function afegirJoc($nom, $plataforma, $any_estrena, $estat) {
    
            // creo la consulta, fent servir : per a indicar el camp
            $sql = "INSERT INTO videojocs (nom, plataforma, any_estrena, estat) VALUES (:nom, :plataforma, :any_estrena, :estat)";
    
            // Preparo el statment amb la consulta
            $stmt = $this->pdo->prepare($sql);
    
            // executo la consulta amb les dades, en un array per a evitar injecció
            $stmt->execute([
                ':nom' => $nom,
                ':plataforma' => $plataforma,
                ':any_estrena' => $any_estrena,
                ':estat' => $estat
            ]);
        }
    
        function editarJoc($id, $noves_dades) {
    
            // Creo la consulta filtrant per ID
            $sql = "SELECT * FROM videojocs WHERE id = :id";
    
            // Preparo statement
            $stmt = $this->pdo->prepare($sql);
    
            //Executo la consulta filtrant per id
            $stmt->execute([
                ':id' => $id
            ]);
    
            // Rebo dades de la BD amb fetch per a que només sigui un array
            $resultat = $stmt->fetch();
    
            // creo el array que passo a la BD
            $jocEditat = [];
    
            //Afegeixo les ades al nou array, miro si estan buides o no, i tenint en compte els : abans de cada nom de la nova consulta
            $jocEditat[':id'] = $resultat['id'];
    
            // Les dades que s'hagin modificat, es modifiquen al array nou
            if (isset($noves_dades['nom'])) {
                $jocEditat[':nom'] = $noves_dades['nom'];
            } else {
                $jocEditat[':nom'] = $resultat['nom'];
    
            };
    
            if (isset($noves_dades['plataforma'])) {
                $jocEditat[':plataforma'] = $noves_dades['plataforma'];
            }  else {
                $jocEditat[':plataforma'] = $resultat['plataforma'];
    
            };
    
            if (isset($noves_dades['any_estrena'])) {
                $jocEditat[':any_estrena'] = $noves_dades['any_estrena'];
            }  else {
                $jocEditat[':any_estrena'] = $resultat['any_estrena'];
    
            };
    
            if (isset($noves_dades['estat'])) {
                $jocEditat[':estat'] = $noves_dades['estat'];
            }  else {
                $jocEditat[':estat'] = $resultat['estat'];
    
            };
    
            // creo la consulta SQL per modificar les dades
            $sql = "UPDATE videojocs SET nom = :nom, plataforma = :plataforma, any_estrena = :any_estrena, estat = :estat WHERE id = :id";
    
            // Preparo statement
            $stmt = $this->pdo->prepare($sql);
    
            // Executo la consulta
            $stmt->execute($jocEditat);
        }
    
        function eliminarJoc($id) {
    
            // Creo la consulta filtrant per id
            $sql = "DELETE FROM videojocs WHERE id = :id";
    
            // Preparo statemnte
            $stmt = $this->pdo->prepare($sql);
    
            // Executo la consulta
            $stmt->execute([
                ':id' => $id
            ]);
        }
    }
