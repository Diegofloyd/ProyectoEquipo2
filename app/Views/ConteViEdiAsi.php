<?php
        if(isset($users)){
            $id=$users[0]['codigo'];    
        }else{
            $id="";
        }
    ?>    
<!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Edicion de Asignaturas</h2>
            <div id="Menu2" >
                    <form method="POST" action="<?php echo base_url();?>/index.php/Home/Asignaturas_Update2" role= "form"  >
                        <div class="row row-space">
                            <div class="col-4" id="campo">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre" id="nombre" value="" >
                                </div>
                            </div>
                            <div class="col-1" id="campo">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <input class="input--style-4" type="hidden" name="id" id="id" value="<?php echo $id?>">
                                </div>
                            </div>
                        </div>
                        <div class="btn-group-horizontal" id="btns">
                            <div class="p-t-15">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                            </div>
                        </div>
                </form>
            </div>
      </div>
        
    </div>
    