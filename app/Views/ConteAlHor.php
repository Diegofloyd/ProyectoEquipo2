<div id="content" class="p-4 p-md-5 pt-5">
    <h2 class="mb-4">Horario JUL-DIC 2020</h2>
    <div class="table-responsive">
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Asignatura</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Juves</th>
                    <th>Viernes</th>
                </tr>
            </thead>
            <?php foreach ($horario as $calificacion) {
                echo "<tr>";
                echo "<td>" . $calificacion['idHorario'];
                echo "<td>" . $calificacion['asignatura'];
                echo "<td>" . $calificacion['d1'];
                echo "<td>" . $calificacion['d2'];
                echo "<td>" . $calificacion['d3'];
                echo "<td>" . $calificacion['d4'];
                echo "<td>" . $calificacion['d5'];
                echo "</tr>";
            } ?>
        </table>



    </div>

</div>
</div>