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
        foreach ($_SESSION['objetosEstelares'] as $i){
            if ($i->getId() == $id){
                unset($_SESSION['objetosEstelares'][$i]);
                $_SESSION['objetosEstelares'] = array_values($_SESSION['objetosEstelares']);
            }
        }
    }

    public function buscarEntidad($id){
        foreach ($_SESSION['objetosEstelares'] as $i => $obj){
            if ($obj->getId() == $id){
                return $_SESSION['objetosEstelares'][$i];
            }
        }
    }

    public function actualizarEntidad($id, $nom, $planetaO, $nivEst){
        foreach ($_SESSION['objetosEstelares'] as $i => $obj){
            if ($obj->getId() == $id){
                $obj->setNombre($nom);
                $obj->setPlanetaOrigen($planetaO);
                $obj->setNivelEstabilidad($nivEst);
            }
        }
    }
}