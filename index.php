<?php
require_once(__DIR__ . "/controllers/ProductoController.php");

$controller = new ProductoController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productoId = $_POST["producto_id"];

    $controller->index($productoId);
} else {
    $controller->index(1);
}
