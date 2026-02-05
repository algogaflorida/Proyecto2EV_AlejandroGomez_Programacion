<?php
class ArtefactoAntiguo extends entidadEstelar implements iReaccionEstelar {
    private $antiguedad;

    public function __construct($id, $nom, $planetaO, $niv, $antig){
        parent::__construct($id, $nom, $planetaO, $niv);
        $this->antiguedad = $antig;
    }

    public function setAntiguedad($antig){
        $this->setAntiguedad = $antig;
    }

    public function getAntiguedad(){
        return $this->antiguedad;
    }

    public function reaccionar(){
        echo "Digamos que entiendo lo que dice";
    }   
}