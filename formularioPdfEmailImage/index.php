<?php 
require './layout.php';
cabezera();
?>

<main>
    <h1>Formulario</h1>
    <section>
        <form action="pdf.php" method="post">
            <div class="grid-container">
                <div>
                    <label for="nombre">Nombre de Alumno:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div>
                    <label for="apellido1">Primer Apellido:</label>
                    <input type="text" id="apellido1" name="apellido1">
                </div>
                <div>
                    <label for="apellido2">Segundo Apellido:</label>
                    <input type="text" id="apellido2" name="apellido2">
                </div>

                <h3 class="grid-title">Actividades</h3>
                <div>
                    <label for="actividad1">Ejercicio 1:</label>
                    <input type="text" id="actividad1" name="actividades[0][nombre]">

                    <label for="nota1">Nota:</label>
                    <input type="number" id="nota1" name="actividades[0][nota]" min="0" max="10" step="0.1">

                    <label for="comentario1">Comentario:</label>
                    <textarea id="comentario1" name="actividades[0][comentario]"></textarea>
                </div>

                <div>
                    <label for="actividad2">Ejercicio 2:</label>
                    <input type="text" id="actividad2" name="actividades[1][nombre]">

                    <label for="nota2">Nota:</label>
                    <input type="number" id="nota2" name="actividades[1][nota]" min="0" max="10" step="0.1">

                    <label for="comentario2">Comentario:</label>
                    <textarea id="comentario2" name="actividades[1][comentario]"></textarea>
                </div>

                <div>
                    <label for="actividad3">Ejercicio 3:</label>
                    <input type="text" id="actividad3" name="actividades[2][nombre]">

                    <label for="nota3">Nota:</label>
                    <input type="number" id="nota3" name="actividades[2][nota]" min="0" max="10" step="0.1">

                    <label for="comentario3">Comentario:</label>
                    <textarea id="comentario3" name="actividades[2][comentario]"></textarea>
                </div>

                <div>
                    <label>Actitud en Clase:</label>
                    <select name="actitud">
                        <option value="Buena">Buena</option>
                        <option value="Normal">Normal</option>
                        <option value="Mala">Mala</option>
                    </select>
                </div>
                <div>
                    <label>Idiomas :</label><br>
                    <input type="checkbox" id="catalan" name="idiomas[]" value="Catalán">
                    <label for="catalan">Catalán</label><br>
                    <input type="checkbox" id="castellano" name="idiomas[]" value="Castellano">
                    <label for="castellano">Castellano</label><br>
                    <input type="checkbox" id="frances" name="idiomas[]" value="Francés">
                    <label for="frances">Francés</label><br>
                    <input type="checkbox" id="ingles" name="idiomas[]" value="Inglés">
                    <label for="ingles">Inglés</label><br>
                </div>

            </div>

            <input type="submit" value="Guardar en PDF">
        </form>

    </section>
</main>

<?php 
footer();
?>