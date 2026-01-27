<?php
class ArtefactoAntiguo extends entidadEstelar implements iReaccionEstelar {
    private $antiguedad;

    public function __construct($antig, $nom, $planetaO, $niv){
        $this->antiguedad = $antig;
        parent::__construct($nom, $planetaO, $niv);
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