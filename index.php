<?php
// ENRUTADOR

require_once(__DIR__ . "/src/controllers/ProductoController.php");

// URL completa del navegador
$urlCompleta = $_SERVER["REQUEST_URI"];

// Separar las palabras por /
$partes = explode("/", $urlCompleta);

$controller = new ProductoController();

if (end($partes) === "create") {
    $controller->create();
    die();
}


$controller->index();
