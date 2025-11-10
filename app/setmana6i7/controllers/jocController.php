<?php
    // Importo el model
    require __DIR__ . '/../models/jocModel.php';

    class jocController {

      private jocModel $model;

      public function __construct() {
          $this->model = new jocModel();
      }

      function llista() {
        // Crido a la funció
        $jocs = $this->model->llegirJocs(); 

        // Carrego la vista
        require __DIR__ . '/../views/llistaJocs.php';
      }

      function afegir() {

        //Configuro la rececpció del mètode post del formulari
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

          // Les variables
          $nom = $_POST['nom'];
          $plataforma = $_POST['plataforma'];
          $any_estrena = $_POST['any_estrena'];
          $estat = $_POST['estat'];

          //Crido a la funció del model
          $this->model->afegirJoc($nom, $plataforma, $any_estrena, $estat);

          // Redirigeixo amb un missatge
            header("Location: index.php"); exit; // PRG
                    
          // redirecciono al llistat
        } else {
          require __DIR__ . '/../views/afegirJoc.php';

        }
      }

      // poso la ID aquí ja que la rebo per URL
      function editar($id) {

        // Configuro recepció mètode post del formulari
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

          // creo array associatiu
          $noves_dades = [];

          // Les variables dins del array
          $noves_dades['nom'] = $_POST['nom'];
          $noves_dades['plataforma'] = $_POST['plataforma'];
          $noves_dades['any_estrena'] = $_POST['any_estrena'];
          $noves_dades['estat'] = $_POST['estat'];

          // Crido al mètode donant la id i l'array
          $this->model->editarJoc($id, $noves_dades);

          //Redirigeixo a llistat
            header("Location: index.php"); exit; // PRG
        } else {
          
          $joc = $this->model->llegirJocPerId($id);

          require __DIR__ . '/../views/editarJoc.php';

        }
      }

      function eliminar($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          $this->model->eliminarJoc($id);

          //Redirigeixo a llistat
          header("Location: index.php");
          exit;
        } else {
          $joc = $this->model->llegirJocPerId($id);

          require __DIR__ . '/../views/eliminarJoc.php';

        }
      }
    }


