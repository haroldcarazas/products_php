<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <main class="p-4">
        <h1 class="text-3xl mb-6">Todos los productos</h1>


        <?php
        session_start();
        if (isset($_SESSION["successMessage"])) {
        ?>
            <div class="bg-green-300 px-3 py-2 flex justify-center items-center absolute top-6 right-6 rounded-md">
                <p class="text-white"><?= $_SESSION["successMessage"] ?></p>
            </div>
        <?php
            unset($_SESSION["successMessage"]);
        }
        ?>

        <?php
        if (isset($_SESSION["errorMessage"])) {
        ?>
            <div class="bg-red-300 px-3 py-2 flex justify-center items-center absolute top-6 right-6 rounded-md">
                <p class="text-white"><?= $_SESSION["errorMessage"] ?></p>
            </div>
        <?php
            unset($_SESSION["errorMessage"]);
        }
        ?>

        <a href="/index.php/create" class="px-2 py-1 bg-green-500 rounded-md text-white mb-6 inline-block hover:bg-blue-500 hover:text-black">Crear nuevo producto</a>

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
    </main>
</body>

</html>