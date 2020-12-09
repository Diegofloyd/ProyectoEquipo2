<div id="content" class="container p-5 my-3 rounded-lg  w-100 mt-xl-5">

    <h1>Calificaciones</h1>
    <br>
    <div class="container ">
        <div class="card " style="width:400px ">
            <img class="card-img-top " src="<?php echo base_url(); ?>/assets/images/img_avatar1.png " alt="Card image " style="width:100% ">
            <div class="card-body ">
                <h4 class="card-title ">Alumno </h4>
                <p class="card-text ">Carrera: Ingenieria en Software</p>
                <p class="card-text ">Grupo: 2</p>

                <form method="POST" action="<?php echo base_url(); ?>/index.php/Home/Profesor_Calificaciones" role="form">
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="usr ">Alumno: </label>
                            <input class="input--style-4" type="text" name="alumno" id="alumno" value="" required="">
                        </div>
                    </div>
                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Asignatura:</label>
                            <input class="input--style-4" type="text" name="asignatura" id="asignatura" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Parcial:</label>
                            <input class="input--style-4" type="text" name="parcial" id="parcial" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Puntaje:</label>
                            <input class="input--style-4" type="text" name="puntaje" id="puntaje" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="p-t-15">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <br>

    <div class="container " >
        <div class="card " style="width:400px ">
            <img class="card-img-top " src="<?php echo base_url(); ?>/assets/images/img_avatar6.png " alt="Card image " style="width:100% ">
            <div class="card-body ">
                <h4 class="card-title ">Alumno </h4>
                <p class="card-text ">Carrera: Ingenieria en Software</p>
                <p class="card-text ">Grupo: 2</p>

                <form method="POST" action="<?php echo base_url(); ?>/index.php/Home/Profesor_Calificaciones" role="form">
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="usr ">Alumno: </label>
                            <input class="input--style-4" type="text" name="alumno" id="alumno" value="" required="">
                        </div>
                    </div>
                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Asignatura:</label>
                            <input class="input--style-4" type="text" name="asignatura" id="asignatura" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Parcial:</label>
                            <input class="input--style-4" type="text" name="parcial" id="parcial" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="col-2">
                        <div class="input-group ">
                            <label for="pwd ">Puntaje:</label>
                            <input class="input--style-4" type="text" name="puntaje" id="puntaje" value="" required="">
                        </div>
                    </div>

                    <br>
                    <div class="p-t-15">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    
    

    </section>
</div>