            <!-- Page Content  -->


            <div id="content" class="container p-5 my-3 rounded-lg  w-100 mt-xl-5">
                <h1>Datos Personales</h1>
                <br>
                <div class="container">
                    <div class="card" style="width:600px">
                        <img class="card-img-top" src="<?php echo base_url(); ?>/assets/images/img_avatar1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Profesor </h4>

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
            </section>