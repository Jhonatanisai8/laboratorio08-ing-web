<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<div class="container" class="card" style="width: 18rem;">
    <h1>Agregar Material</h1>
    <form method="post">
        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>
        </div>
        <div class="mb-3">
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required><br>
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required><br>
        </div>
        <div class="mb-3">
            <a class="btn btn-primary" href="?controller=material&action=index">CANCELAR</a>
            <button class="btn btn-info" type="submit">Crear</button>
    </form>
</div>
</body>
</html>