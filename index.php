<?php
session_start();
require_once "autoloader.php";

$gestor = new GestorGalactico();
$controller = new ControladorGalactico($gestor);
$accion = $_GET['accion'] ?? "index";

switch ($accion) {
    case "registrar":
        $controller->registro();
        break;
    case "exploracion":
        $controller->explorador();
        break;
    case "modificar":
        $controller->modificacion();
        break;
    case "expulsar":
        $controller->expulsion();
        break;
    case "index":
        $controller->listar();
        break;
}