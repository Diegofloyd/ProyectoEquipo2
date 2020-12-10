 <div id="content" class="p-4 p-md-5 pt-5 w-100 mt-xl-5">
            <h2 class="mb-4">Mi Perfil</h2>
            <div id="Menu">
                <div class="card" style="width:800px">
                    <img class="card-img-top" src="<?php echo base_url();?>/assets/images/alumno.jpeg" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Alumno </h4>
                    <table class="table ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Contraseña</th>
                                        <th>Tipo de Usuario</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>

                                <?php
                                    echo '<tr>';
                                    echo '<td>'. session('nombre');
                                    echo '<td>'.session('apellidoPaterno');
                                    echo '<td>'.session('apellidoMaterno');
                                    echo '<td>'.session('contrasena');
                                    echo '<td>'.session('tipo');
                                    echo '<td>'.session('correo');
                                    echo '</tr>';
                                    ?>


                            </table>
                    </div>

                </div>

            </div>

        </div>
    </div>


