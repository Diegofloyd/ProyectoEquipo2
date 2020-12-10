<?php
        if(isset($users)){
            $id=$users[0]['idUsuario'];    
        }else{
            $id="";
        }
    ?>    
       <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Edicion Usuarios</h2>
            <div id="Menu2" >
                    <form method="POST" action="<?php echo base_url();?>/index.php/Home/Usuarios_Update2" role= "form"  >
                        <div class="row row-space">
                            <div class="col-3" id="campo">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre" id="nombre" value="">
                                </div>
                            </div>
                            <div class="col-3" id="campo">
                                <div class="input-group">
                                    <label class="label">Apellido Paterno</label>
                                    <input class="input--style-4" type="text" name="apaterno" id="apaterno" value="" >
                                </div>
                            </div>
                            <div class="col-3" id="campo">
                                <div class="input-group">
                                    <label class="label">Apellido Materno</label>
                                    <input class="input--style-4" type="text" name="amaterno" id="amaterno" value="" >
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">Correo</label>
                                    <input class="input--style-4" type="email" name="correo" id="correo" value="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" name="contrasena" id="contrasena" value="" required="">
                                </div>
                            </div>
                            <div class="col-3" id="campo">
                                <div class="input-group">
                                    <label class="label">Tipo</label>
                                    <input class="input--style-4" type="text" name="tipo" id="tipo" value="">
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
                                <button class="btn btn-primary" type="submit">Editar</button>
                            </div>
                        </div>
                </form>
            </div>
      </div>
        
    </div>
