<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Producto.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/models/Categoria.php");

class ProductoController
{
    // Muestra la vista con todos los productos
    public function index()
    {
        $producto = new Producto();
        $data = $producto->all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/read.php";
    }

    // Muestra la vista para crear un producto
    public function create()
    {
        $data = Categoria::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/create.php";
    }

    // Guarda un nuevo producto en la base de datos
    public function store($data)
    {
        $producto = new Producto();
        $newProducto = $producto->create($data);

        session_start();
        if ($newProducto) {
            $_SESSION["successMessage"] = "Producto creado";
        } else {
            $_SESSION["errorMessage"] = "Hubo un error al crear el producto.";
        };
        header("Location: /index.php");
    }

    // Muestra el formulario para editar
    public function edit($id)
    {
        $productoController = new Producto();
        $producto = $productoController->getById($id);

        $categorias = Categoria::all();

        include $_SERVER["DOCUMENT_ROOT"] . "/src/views/edit.php";
    }
}
