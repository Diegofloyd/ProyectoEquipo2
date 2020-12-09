<!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Baja de Alumnos</h2>
            <div id="Menu3" >    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Email</th>
                            <th>Grupo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($osito as $alumno){
                            echo "<tr>";
                            echo "<td>".$alumno['matricula'];
                            echo "<td>".$alumno['nombre'];
                            echo "<td>".$alumno['apellidoPaterno'];
                            echo "<td>".$alumno['apellidoMaterno'];    
                            echo "<td>".$alumno['correo'];    
                            echo "<td>".$alumno['grupo'];    
                            echo "</tr>";                            
                        }?>
                    </tbody>
                </table>  
                <div class="btn-group-horizontal" id="btns">
                    <div class="p-t-15">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                </div>    
            </div>
      </div>
    </div>