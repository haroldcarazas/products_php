<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todos los productos</h1>

    <a href="/index.php/crear">Crear nuevo producto</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $producto) {
            ?>
                <tr>
                    <td><?= $producto["id"] ?></td>
                    <td><?= $producto["nombre"] ?></td>
                    <td><?= $producto["precio"] ?></td>
                    <td><?= $producto["categoria_nombre"] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>