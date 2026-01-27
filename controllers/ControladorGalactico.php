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
                $anti = $_POST['antiguedad'];
                $entidad = new ArtefactoAntiguo($id, $nom, $planO, $nivEst, $anti);
            } 
            if (!empty($_POST['dieta'])){
                $die = $_POST['dieta'];
                $entidad = new FormaDeVida($id, $nom, $planO, $nivEst, $die);
            } 
            if (!empty($_POST['dureza'])) {
                $dur = $_POST['dureza'];
                $entidad = new MineralRaro($id, $nom, $planO, $nivEst, $dur);
            }
            $this->gestor->guardar($entidad);
            header("Location: index.php");
            exit;
        }
        include "views/registrar.php";
    }

    public function explorador(){
        $entidades = $this->gestor->obtenerTodos();
        include "views/explorador.php";
    }

    public function modificacion(){
        $id = $_GET['id'] ?? $_POST['id'];
        
        $entidad = $this->gestor->buscarEntidad($id);

        if (!$entidad){
            echo "La entidad no se encuentra registrada";
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nom = $_POST['nombre'];
            $planO = $_POST['planetaOrigen'];
            $nivEst = $_POST['nivelEstabilidad'];
            $antig = $_POST['antiguedad'];
            $dur = $_POST['dureza'];
            $die = $_POST['dieta'];

            if (!empty($die)){
                $this->gestor->actualizarEntidad($nom, $planO, $nivEst, $die);
            }
            if (!empty($dur)){
                $this->gestor->actualizarEntidad($nom, $planO, $nivEst, $dur);
            } 
            if (!empty($anti)) {
                $this->gestor->actualizarEntidad($nom, $planO, $nivEst, $anti);
            }
            header('Location: index.php');
            exit;
        }
        include 'views/modificacion.php';
    }

    public function expulsar(){
        $id = $_GET['id'] ?? $_POST['id'];
        $this->gestor->eliminar($id);
        header('Location: index.php');
        exit;
    }
}