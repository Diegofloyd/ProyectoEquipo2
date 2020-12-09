<div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Calificaciones Descripción</h2>
            <div class="table-responsive">
            <table class="table ">
                            <thead class="thead-dark">
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Asignatura</th>
                            <th>Parcial 1</th>
                            <th>Parcial 2</th>
                            <th>Parcial 3</th>
                            </tr>
                            </thead>
                            <?php foreach($osito as $datoA){
                            echo "<tr>";
                            echo "<td>".$datoA['idCalificacion'];
                            echo "<td>".$datoA['alumno'];
                            echo "<td>".$datoA['asignatura'];
                            echo "<td>".$datoA['p1'];
                            echo "<td>".$datoA['p2'];
                            echo "<td>".$datoA['p3'];
                            echo "</tr>";
                        }?>
             </table>
            </div>

        </div>
    </div>
