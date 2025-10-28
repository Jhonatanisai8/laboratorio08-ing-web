<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curd con MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include '../app/views/incl/navbar.php'
?>
<div class="container">
    <h1>Lista de Materiales</h1>
    <a href="?controller=material&action=create" class="btn btn-primary">Agregar un nuevo material</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($materiales as $material): ?>
            <tr>
                <td><?php echo htmlspecialchars($material['codigo']); ?></td>
                <td><?php echo htmlspecialchars($material['nombre']); ?></td>
                <td><?php echo htmlspecialchars($material['precio']); ?></td>
                <td><?php echo htmlspecialchars($material['cantidad']); ?></td>
                <td>
                    <a class="btn btn-secondary" href="?controller=material&action=edit&codigo=<?php echo $material['codigo']; ?>">Editar</a>
                    <a class="btn btn-danger" href="?controller=material&action=delete&codigo=<?php echo $material['codigo']; ?>"
                       onclick="return confirm('¿Estás seguro de que deseas eliminar este Material?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>