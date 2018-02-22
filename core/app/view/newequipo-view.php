<?php
$categories = EntidadData::getAll();
?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Agregar nuevo Equipo</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addequipo" role="form">
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Nombre del equipo*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Nombre_Equipo" class="form-control" 
                                   id="Nombre_Equipo" placeholder="Nombre del equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Numero de Jugadores*
                        </label>
                        <div class="col-md-6">
                            <input type="number" name="Num_Jugadores" class="form-control" 
                                   id="Num_Jugadores" placeholder="Numero de Jugadores">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Nombre del Representante
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="RepresentanteNombre" class="form-control" 
                                   id="RepresentanteNombre" placeholder="Nombre del Representante">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Nombre del Entrenador
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="EntrenadorNombre" class="form-control" 
                                   id="EntrenadorNombre" placeholder="Nombre del Entrenador">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Telefono del Representante
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Tel_Representante" class="form-control" 
                                   id="Tel_Representante" placeholder="Telefono del Representante">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Correo del Representante
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="Correo_Representante" class="form-control" 
                                   id="Correo_Representante" placeholder="Correo del Representante">
                        </div>
                    </div>                                                          
                    
<!--                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Equipo*</label>
                        <div class="col-md-6">
                            <select name="TipoEquipo" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <option value="Futboal 8">Futboal 8</option>
                                <option value="Futboal 5">Futboal 5</option>
                                <option value="Voleibol">Voleibol</option>
                                <option value="Baloncesto">Baloncesto</option>
                            </select>
                        </div>
                    </div>-->
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Entidad a la que pertenece*</label>
                        <div class="col-md-6">
                            <select name="Entidad_idEntidad" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat->Entidad_idEntidad; ?>"><?php echo $cat->NombreEntidad; ?></option>      
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Equipo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>