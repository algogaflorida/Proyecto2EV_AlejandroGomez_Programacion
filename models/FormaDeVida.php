<?php
class FormaDeVida extends entidadEstelar implements iReaccionEstelar{
    private $dieta;

    public function __construct($dieta, $nom, $planetaO, $niv){
        $this->dieta = $dieta;
        parent::__construct($nom, $planetaO, $niv);
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