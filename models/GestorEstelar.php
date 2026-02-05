<?php
class GestorEstelar implements iGestor {

    public function __construct(){
        if (!isset($_SESSION['objetosEstelares'])){
            $_SESSION['objetosEstelares'] = [];
        }
    }

    public function obtenerTodos(){
        return $_SESSION['objetosEstelares'];
    }

    public function guardar($entidadEstelar){
        $_SESSION['objetosEstelares'][] = $entidadEstelar;
    }

    public function eliminar($id){
        foreach ($_SESSION['objetosEstelares'] as $i => $entidad){
            if ($entidad->getId() == $id){
                unset($_SESSION['objetosEstelares'][$i]);
                $_SESSION['objetosEstelares'] = array_values($_SESSION['objetosEstelares']);
                return true;
            }
        }
        return false;
    }

    public function buscarEntidad($id){
        foreach ($_SESSION['objetosEstelares'] as $i => $obj){
            if ($obj->getId() == $id){
                return $_SESSION['objetosEstelares'][$i];
            }
        }
    }

    public function actualizarEntidad($id, $nom, $planetaO, $nivEst, $antig, $dur, $die){
        foreach ($_SESSION['objetosEstelares'] as $i => $obj){
            if ($obj->getId() == $id){
                $obj->setNombre($nom);
                $obj->setPlanetaOrigen($planetaO);
                $obj->setNivelEstabilidad($nivEst);
                if ($obj instanceof FormaDeVida) {
                    $obj->setDieta($die);
                }
                if ($obj instanceof MineralRaro) {
                    $obj->setDureza($dur);
                }
                if ($obj instanceof ArtefactoAntiguo) {
                    $obj->setAntiguedad($antig);
                }
            }
        }
    }
}