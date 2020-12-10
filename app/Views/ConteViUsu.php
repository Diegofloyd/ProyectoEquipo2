<!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Usuarios</h2>
            <div id="Menu3" >    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Email</th>
                            <th>tipo</th>
                            <th>contraseña</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($osito as $usuario){
                            echo "<tr>";
                            echo "<td>".$usuario['nombre'];
                            echo "<td>".$usuario['apellidoPaterno'];
                            echo "<td>".$usuario['apellidoMaterno'];    
                            echo "<td>".$usuario['correo'];    
                            echo "<td>".$usuario['tipo'];
                            echo "<td>".$usuario['contrasena'];
                            echo "<td>";                           
                        ?>
                        <a href="<?php echo base_url();?>/index.php/Home/Usuarios_Update?id=<?php echo $usuario['idUsuario'];?>" ><button class="btn btn-primary btn-sm" type="">A</button></a>
                        <a href="<?php echo base_url();?>/index.php/Home/Usuarios_Delete?id=<?php echo $usuario['idUsuario'];?>" ><button class="btn btn-danger btn-sm" type="">E</button></a>  
                         
                       <?php  
                        echo "</td>";
                        echo "</tr>";
                        }?>
                    </tbody>
                </table>     
            </div>
      </div>
    </div>