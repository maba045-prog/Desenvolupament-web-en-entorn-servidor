<?php
    class Database {

        private PDO $pdo; // declarem la propietat PDO

        public function __construct() {
            //Variables necessàries, per connectar a la BD 
            $host = "mysql";           
            $dbname = "videojocs_mvc"; 
            $user = "root";
            $pass = "root";

            //Amb un try, provo de connectarme a la BD; si no es pot, salta el catch.
            // Ho faig creant un objecte PDO i passant les variables com $host(mysql)...

            try {
                $this->pdo = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8",
                    $user,
                    $pass,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch(PDOException $e) {
                exit("No s'ha pogut connectar amb la Base de Dades");
            }
        }

        // mètode públic per obtenir el PDO
        public function getConnection(): PDO {
            return $this->pdo;
        }
    }
    
?>