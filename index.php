<?php
// ENRUTADOR

require_once(__DIR__ . "/src/controllers/ProductoController.php");

// URL completa del navegador
$urlCompleta = $_SERVER["REQUEST_URI"];

// Separar las palabras por /
$partes = explode("/", $urlCompleta);

$controller = new ProductoController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (end($partes) === "create") {
        $controller->store($_POST);
        die();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (end($partes) === "create") {
        $controller->create();
        die();
    }
}


$controller->index();
