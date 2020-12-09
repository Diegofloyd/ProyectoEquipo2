<!-- Page Content  -->
       <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Baja Asignatura</h2>
            <div id="Menu3" >    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($osito as $asignatura){
                            echo "<tr>";
                            echo "<td>".$asignatura['codigo'];
                            echo "<td>".$asignatura['nombre'];   
                            echo "</tr>";                            
                        }?>
                    </tbody>
                </table>  
                <div class="btn-group-horizontal" id="btns">
                    <div class="p-t-15">
                                <button class="btn btn-primary" type="submit">Eliminar</button>
                    </div>
                </div>    
            </div>
      </div>
    </div>