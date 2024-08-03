<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Expediente de Alumno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Ejercicio de Practica</h1>
        <?php
$coches = [
    [
        'marca' => 'Toyota',
        'modelo' => 'Corolla',
        'color' => 'Rojo',
        'matricula' => 'ABC1234'
    ],
    [
        'marca' => 'Ford',
        'modelo' => 'Focus',
        'color' => 'Azul',
        'matricula' => 'XYZ5678'
    ],
    [
        'marca' => 'Honda',
        'modelo' => 'Civic',
        'color' => 'Negro',
        'matricula' => 'LMN9012'
    ],
    [
        'marca' => 'Chevrolet',
        'modelo' => 'Malibu',
        'color' => 'Blanco',
        'matricula' => 'JKL3456'
    ]
];

echo "<h2>Listado de Coches</h2>";
echo "<table>";
echo "<tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Matrícula</th>
      </tr>";

foreach ($coches as $coche) {
    echo "<tr>
            <td>" . htmlspecialchars($coche['marca']) . "</td>
            <td>" . htmlspecialchars($coche['modelo']) . "</td>
            <td>" . htmlspecialchars($coche['color']) . "</td>
            <td>" . htmlspecialchars($coche['matricula']) . "</td>
          </tr>";
}

echo "</table>";
?>
    </main>
</body>

</html>