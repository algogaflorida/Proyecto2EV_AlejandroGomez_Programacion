<?php
abstract class EntidadEstelar {
    protected $id;
    protected $nombre;
    protected $planetaOrigen;
    protected $nivEstabilidad;

    public function __construct($nom, $planetaO, $niv){
        $this->id = uniqid();
        $this->nombre = $nom;
        $this->planetaOrigen = $planetaO;
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