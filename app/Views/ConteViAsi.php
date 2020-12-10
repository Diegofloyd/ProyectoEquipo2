<!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Asignaturas</h2>
            <div id="Menu3" >    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($osito as $asignatura){
                            echo "<tr>";
                            echo "<td>".$asignatura['codigo'];
                            echo "<td>".$asignatura['nombre'];                               
                            echo "<td>";                           
                        ?>
                            <a href="<?php echo base_url();?>/index.php/Home/Asignaturas_Update?id=<?php echo $asignatura['codigo'];?>"><button class="btn btn-primary btn-sm" type="">A</button></a>
                            <a href="<?php echo base_url();?>/index.php/Home/Asignaturas_Delete?id=<?php echo $asignatura['codigo'];?>"><button class="btn btn-danger btn-sm" type="">E</button></a>    
                        <?php  
                            echo "</td>";
                            echo "</tr>";
                        }?>
                    </tbody>
                </table>     
            </div>
      </div>
    </div>
