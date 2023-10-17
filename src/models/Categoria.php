<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Categoria
{
    private $connection;

    public function __construct()
    {
        $db = new DB();
        $this->connection = $db->connect();
    }

    public static function all()
    {
        $db = new DB();
        $connection = $db->connect();
        $res = $connection->query("SELECT * FROM categorias");
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
}
