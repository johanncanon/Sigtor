<?php
$categories = EquipoData::getAll();
?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Agregar Jugador</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addjugador" role="form">

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Nombres*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Nombres" class="form-control" 
                                   id="Nombres" placeholder="Nombres">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Apellidos*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Apellidos" class="form-control" 
                                   id="Apellidos" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Edad*
                        </label>
                        <div class="col-md-6">
                            <input type="number" name="Edad" class="form-control" 
                                   id="Edad" placeholder="Edad">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Numero de Documento*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Cedula" class="form-control" 
                                   id="Cedula" placeholder="Cedula">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Telefono*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Telefono" class="form-control" 
                                   id="Telefono" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Celular*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Celular" class="form-control" 
                                   id="Celular" placeholder="Celular">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
                        <div class="col-md-6">
                            <select name="Sexo" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <option value="Mujer">Mujer</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Intersexual">Intersexual</option>
                            </select>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Cuenta con ARL*</label>
                        <div class="col-md-6">
                            <select name="Tiene_ARL" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Equipo en el que jugara*</label>
                        <div class="col-md-6">
                            <select name="Equipo_idEquipo" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat->idEquipo; ?>"><?php echo $cat->Nombre_Equipo; ?></option>      
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Jugador</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>