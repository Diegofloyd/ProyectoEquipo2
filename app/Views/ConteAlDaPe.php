 <div id="content" class="p-4 p-md-5 pt-5 w-100 mt-xl-5">
            <h2 class="mb-4">Mi Perfil</h2>
            <div id="Menu">
                <div class="card" style="width:590px">
                    <img class="card-img-top" src="<?php echo base_url();?>/assets/images/alumno.jpeg" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Alumno </h4>
                        <table class="table ">
                            <thead class="thead-dark">
                            <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Correo</th>
                            <th>Grupo</th>
                            </tr>
                            </thead>
                            <?php foreach($osito as $datoA){
                            echo "<tr>";
                            echo "<td>".$datoA['matricula'];
                            echo "<td>".$datoA['nombre'];
                            echo "<td>".$datoA['apellidoPaterno'];
                            echo "<td>".$datoA['apellidoMaterno'];
                            echo "<td>".$datoA['correo'];
                            echo "<td>".$datoA['grupo'];
                            echo "</tr>";
                        }?>
             </table>
                    </div>

                </div>

            </div>

        </div>
    </div>


