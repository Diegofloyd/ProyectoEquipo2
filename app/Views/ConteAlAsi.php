<!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4" align="center">Alta de Asignaturas</h2>
            <div id="Menu2" >
                    <form method="POST" action="<?php echo base_url();?>/index.php/Home/Asignaturas_Insert" role= "form"  >
                        <div class="row row-space">
                            <div class="col-4" id="campo">
                                <div class="input-group">
                                    <label class="label">Codigo</label>
                                    <input class="input--style-4" type="text" name="codigo" id="codigo" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4" id="camp">
                                <br>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4" id="campo">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre" id="nombre" value="" >
                                </div>
                            </div>
                        </div>
                        <div class="btn-group-horizontal" id="btns">
                            <div class="p-t-15">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                </form>
            </div>
      </div>
        
    </div>
    