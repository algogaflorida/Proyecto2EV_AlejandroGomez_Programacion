<?php
class MineralRaro extends entidadEstelar implements iReaccionEstelar{
    private $dureza;

    public function __construct($dur, $nom, $planetaO, $niv){
        $this->dureza = $dur;
        parent::__construct($nom, $planetaO, $niv);
    }

    public function setDureza($dur){
        $this->dureza = $dur;
    }
    
    public function getDureza(){
        return $this->dureza;
    }

    public function reaccionar(){
        echo "El brillo que emite me ciega, pero mola";
    }
}