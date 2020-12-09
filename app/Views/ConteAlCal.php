<div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Calificaciones Descripción</h2>
            <div class="table-responsive">
            <table border="1">
                            <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Asignatura</th>
                            <th>Parcial</th>
                            <th>Puntaje</th>
                            </tr>
                            <?php foreach($calAlumno as $calificacion){
                            echo "<tr>";
                            echo "<td>".$calificacion['idCalificacion'];
                            echo "<td>".$calificacion['alumno'];
                            echo "<td>".$calificacion['asignatura'];
                            echo "<td>".$calificacion['parcial'];
                            echo "<td>".$calificacion['puntaje'];
                            echo "</tr>";
                        }?>
             </table>
            </div>

        </div>
    </div>
