<?php
abstract class EntidadEstelar {
    protected $id;
    protected $nombre;
    protected $planetaOrigen;
    protected $nivEstabilidad;

    public function __construct($id, $nom, $planetaO, $niv){
        $this->id = $id;
        $this->nombre = $nom;
        $this->planetaOrigen = $planetaO;
        $this->nivEstabilidad = $niv;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setPlanetaOrigen($plan){
        $this->planetaOrigen = $plan;
    }

    public function setNivelEstabilidad($niv){
        $this->nivEstabilidad = $niv;
    }

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nombre;
    }

    public function getPlanetaO(){
        return $this->nivEstabilidad;
    }
}