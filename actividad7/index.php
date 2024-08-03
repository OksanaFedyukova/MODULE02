<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Empleados Nuevos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h3>Resultados DB</h3>
        <?php if (isset($_POST['personas'])): ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Género</th>
                    <th>Aficiones</th>
                    <th>País</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $personas = $_POST['personas'];
                    foreach ($personas as $per):
                        if (!empty($per['nombre'])):
                            $aficiones = isset($per['aficiones']) ? implode(', ', $per['aficiones']) : 'Ninguna';
                    ?>
                <tr>
                    <td><?php echo htmlspecialchars($per['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($per['apellido']); ?></td>
                    <td><?php echo htmlspecialchars($per['email']); ?></td>
                    <td><?php echo htmlspecialchars($per['genero']); ?></td>
                    <td><?php echo htmlspecialchars($aficiones); ?></td>
                    <td><?php echo htmlspecialchars($per['pais']); ?></td>
                </tr>
                <?php else: ?>
                <tr>
                    <td colspan="6">No hay nombre</td>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No se han enviado datos.</p>
        <?php endif; ?>
    </main>

</body>

</html>