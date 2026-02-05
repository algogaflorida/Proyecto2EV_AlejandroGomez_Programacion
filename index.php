<?php
require_once "autoloader.php";
session_start();

$gestor = new GestorEstelar();
$controller = new ControladorGalactico($gestor);
$accion = $_GET['action'] ?? null;

switch ($accion) {
    case "registro":
        $controller->registrar();
        break;
    case "explorador":
        $controller->explorador();
        break;
    case "modificacion":
        $controller->modificacion();
        break;
    case "expulsion":
        $controller->expulsar();
        break;
    default:
        $controller->explorador();
}