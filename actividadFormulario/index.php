<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Expediente de Alumno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Relustados de Base de Datos</h1>

        <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido1 = htmlspecialchars($_POST['apellido1']);
    $apellido2 = htmlspecialchars($_POST['apellido2']);
    $actividades = $_POST['actividades'];
    $actitud = htmlspecialchars($_POST['actitud']);
    $idiomas = isset($_POST['idiomas']) ? $_POST['idiomas'] : [];

    echo "<p><strong>Nombre:</strong> $nombre $apellido1 $apellido2</p>";

    echo "<table>";
    echo "<tr>
            <th>Ejercicio</th>
            <th>Nota</th>
            <th>Comentario</th>
          </tr>";

    foreach ($actividades as $actividad) {
        $nombreEjercicio = htmlspecialchars($actividad['nombre']);
        $nota = htmlspecialchars($actividad['nota']);
        $comentario = htmlspecialchars($actividad['comentario']);
        echo "<tr>
                <td>$nombreEjercicio</td>
                <td>$nota</td>
                <td>$comentario</td>
              </tr>";
    }

    echo "</table>";
    echo "<p><strong>Actitud:</strong> $actitud</p>";
    echo "<p><strong>Idiomas:</strong> " . (count($idiomas) > 0 ? implode(', ', $idiomas) : 'Ninguno') . "</p>";
}
?>

    </main>
</body>

</html>