<?php
session_start();
require_once "autoloader.php";

$gestor = new GestorGalactico();
$controller = new ControladorGalactico($gestor);
$accion = $_GET['accion'] ?? "index";

switch ($accion) {
    case "registro":
        $controller->registro();
        break;
    case "explorador":
        $controller->explorador();
        break;
    case "modificacion":
        $controller->modificacion();
        break;
    case "expulsion":
        $controller->expulsion();
        break;
}