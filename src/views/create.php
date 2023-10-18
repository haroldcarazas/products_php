<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main class="h-screen flex flex-col justify-center items-center">
        <h1 class="text-3xl mb-6">Crear un producto</h1>
        <form action="/index.php/create" method="post" class="w-[350px] bg-sky-300 flex flex-col rounded-md py-4 gap-5">
            <div class="flex gap-2 flex-col justify-center items-center">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="w-[50%]">
            </div>

            <div class="flex gap-2 flex-col justify-center items-center">
                <label for="">Precio</label>
                <input type="number" name="precio" class="w-[50%]">
            </div>

            <div class="flex gap-2 flex-col justify-center items-center">
                <label for="">Categoría</label>
                <select name="categoria_id" id="">
                    <?php
                    foreach ($data as $categoria) {
                    ?>
                        <option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="self-center">
                <button type="submit" class="px-2 py-1 bg-blue-600 text-white rounded-md">Guardar</button>
            </div>
        </form>
    </main>
</body>

</html>