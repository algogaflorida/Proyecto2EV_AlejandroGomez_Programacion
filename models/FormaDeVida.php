<?php
class FormaDeVida extends entidadEstelar implements iReaccionEstelar{
    private $dieta;

    public function __construct($id, $nom, $planetaO, $niv, $dieta){
        parent::__construct($id, $nom, $planetaO, $niv);
        $this->dieta = $dieta;
    }

    public function setDieta($dieta){
        $this->dieta = $dieta;
    }

    public function getDieta(){
        return $this->dieta;
    }
    
    public function reaccionar(){
        echo "Su pulso se hace notar cada vez más";
    }
}