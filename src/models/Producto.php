<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Producto
{
    private $connection;

    public function __construct()
    {
        $db = new DB();
        $this->connection = $db->connect();
    }

    public function all()
    {
        $res = $this->connection->query("call sp_productos_categorias();");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function getById($id)
    {
        $res = $this->connection->query("call sp_producto_categoria($id);");
        $data = $res->fetch(PDO::FETCH_ASSOC);

        return $data;
    }

    public function create($data)
    {
        $nombre = $data["nombre"];
        $precio = $data["precio"];
        $categoria_id = $data["categoria_id"];

        try {
            $res = $this->connection->query("INSERT INTO productos(nombre, precio, categoria_id) VALUES ('$nombre', '$precio', '$categoria_id')");

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
