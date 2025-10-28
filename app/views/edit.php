<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
</head>
<body>
<div>
    <h1>Editar Material</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <div>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($user['nombre']); ?>"
                   required><br>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="<?php echo htmlspecialchars($user['precio']); ?>"
                   required><br>
        </div>

        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad"
                   value="<?php echo htmlspecialchars($user['cantidad']); ?>"
                   required><br>
        </div>

        <div>
            <a href="?controller=material&action=index">CANCELAR</a>
            <button type="submit">Actualizar</button>
        </div>
    </form>
</div>
</body>
</html>