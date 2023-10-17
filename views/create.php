<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crear un producto</h1>
    <form action="">
        <label for="">Nombre</label>
        <input type="text" name="nombre">

        <label for="">Precio</label>
        <input type="number" name="precio">

        <label for="">Categoría</label>
        <select name="" id="">
            <?php
            foreach ($data as $categoria) {
            ?>
                <option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
            <?php
            }
            ?>
        </select>

        <button type="submit">Guardar</button>
    </form>
</body>

</html>