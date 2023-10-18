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

    // Penúltimo
    if ($partes[count($partes) - 2] === "edit") {
        $id = $partes[count($partes) - 1];  // Último elemento
        $controller->edit($id);
        die();
    }
}


$controller->index();
