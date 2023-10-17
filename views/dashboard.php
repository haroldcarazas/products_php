<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Ingresa el id del producto que quieres ver: </label>
        <input type="number" name="producto_id">
        <button type="submit">Buscar</button>
    </form>

    <h1>Producto: <?= $data["nombre"] ?></h1>
    <p>Precio: <?= $data["precio"] ?></p>
    <p>Categoria ID: <?= $data["categoria_id"] ?></p>
    <p>Categoria nombre: <?= $data["categoria_nombre"] ?></p>
</body>

</html>