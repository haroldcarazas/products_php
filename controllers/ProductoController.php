<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/models/Producto.php");

class ProductoController
{
    public function index($id)
    {
        $producto = new Producto();
        $data = $producto->getById($id);
        // var_dump($data);

        include $_SERVER["DOCUMENT_ROOT"] . "/views/dashboard.php";
    }
}
