<!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Modificar Profesor</h2>
            <div id="Menu3" >    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Matricula</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($osito as $profesor){
                            echo "<tr>";
                            echo "<td>".$profesor['matricula'];
                            echo "<td>".$profesor['nombre'];
                            echo "<td>".$profesor['apellidoPaterno'];
                            echo "<td>".$profesor['apellidoMaterno'];    
                            echo "<td>".$profesor['correo'];       
                            echo "</tr>";                            
                        }?>
                    </tbody>
                </table>  
                <div class="btn-group-horizontal" id="btns">
                    <div class="p-t-15">
                                <button class="btn btn-primary" type="submit">Modificar</button>
                            </div>
                </div>    
            </div>
      </div>
    </div>