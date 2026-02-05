<?php
interface iGestor {
    public function obtenerTodos();
    public function guardar($entidadEstelar);
    public function eliminar($id);
}