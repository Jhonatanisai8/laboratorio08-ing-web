<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
include '../app/views/incl/navbar.php'
?>
<div class="container">
    <h1>Lista de Clientes</h1>
    <a href="?controller=cliente&action=create" class="btn btn-primary">Agregar un nuevo cliente</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                <td><?php echo htmlspecialchars($cliente['dni']); ?></td>
                <td><?php echo htmlspecialchars($cliente['nombre']); ?></td>
                <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                <td><?php echo htmlspecialchars($cliente['telefono']); ?></td>
                <td>
                    <a class="btn btn-secondary" href="?controller=cliente&action=edit&id=<?php echo $cliente['id']; ?>">Editar</a>
                    <a class="btn btn-danger" href="?controller=cliente&action=delete&id=<?php echo $cliente['id']; ?>"
                       onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>