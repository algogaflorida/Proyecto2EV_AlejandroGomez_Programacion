<?php
class ControladorGalactico {
    private $gestor;

    public function __construct($gestor){
        $this->gestor = $gestor;
    }

    public function registrar(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = uniqid();
            $nom = $_POST['nombre'];
            $planO = $_POST['planetaOrigen'];
            $nivEst = $_POST['nivelEstabilidad'];
            if (!empty($_POST['antiguedad'])){
                $entidad = new ArtefactoAntiguo($id, $nom, $planO, $nivEst, $_POST['antiguedad']);
            } 
            if (!empty($_POST['dieta'])){
                $entidad = new FormaDeVida($id, $nom, $planO, $nivEst, $_POST['dieta']);
            } 
            if (!empty($_POST['dureza'])) {
                $entidad = new MineralRaro($id, $nom, $planO, $nivEst, $_POST['dureza']);
            }
            $this->gestor->guardar($entidad);
            header("Location: index.php");
            exit;
        }
        $tipo = $_GET['tipo'];
        if ( $tipo == "artefacto"){
            include "views/registrarArtefacto.php";
        } elseif ( $tipo == "mineral") {
            include "views/registrarMineral.php";    
        } elseif ($tipo == "fdv") {
             include "views/registrarForma.php";
        }
    }

    public function explorador(){
        $entidades = $this->gestor->obtenerTodos();
        include "views/explorador.php";
    }

    public function modificacion(){
        $id = $_GET['id'] ?? null;
        
        $entidad = $this->gestor->buscarEntidad($id);

        if (!$entidad){
            echo "La entidad no se encuentra registrada";
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nom = $_POST['nombre'];
            $planO = $_POST['planetaOrigen'];
            $nivEst = $_POST['nivelEstabilidad'];
            $this->gestor->actualizarEntidad($id, $nom, $planO, $nivEst, $_POST['antiguedad'], $_POST['dieta'], $_POST['dureza']);
            header('Location: index.php');
            exit;
        }
        include 'views/modificacion.php';
    }

    public function expulsar(){
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);
        header('Location: index.php');
        exit;
    }
}