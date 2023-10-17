<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/models/Producto.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/models/Categoria.php");

class ProductoController
{
    // Muestra la vista con todos los productos
    public function index()
    {
        $producto = new Producto();
        $data = $producto->all();

        include $_SERVER["DOCUMENT_ROOT"] . "/views/read.php";
    }

    // Muestra la vista para crear un producto
    public function create()
    {
        $data = Categoria::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/views/create.php";
    }
}
