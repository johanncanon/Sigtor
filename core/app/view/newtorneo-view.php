<?php
$categories = DeporteData::getAll();
?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Agregar Torneo Deportivo</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addtorneo" role="form">

                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Nombre del torneo*
                        </label>
                        <div class="col-md-6">
                            <input type="text" name="NombreTorneo" class="form-control" 
                                   id="NombreTorneo" placeholder="Nombre del Torneo">
                        </div>
                    </div>
                              <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Entidad a la que pertenece*</label>
                        <div class="col-md-6">
                            <select name="Deportes_idDeportes" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat->idDeportes; ?>"><?php echo $cat->Nombre_Deportes; ?></option>      
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">
                            Fecha de inicio del torneo
                        </label>
                        <div class="col-md-6">
                            <input type="date" name="FechaInicio" class="form-control"  
                                   id="FechaInicio" placeholder="Fecha de Nacimiento">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Fecha finalizacion torneo</label>
                        <div class="col-md-6">
                            <input type="date" name="FechaFin" class="form-control" 
                                   id="FechaFin" placeholder="Fecha de Nacimiento">
                        </div>
                    </div>       
                    
                      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Entidad a la que pertenece*</label>
                        <div class="col-md-6">
                            <select name="Deportes_idDeportes" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($deportes as $dep): ?>
                                    <option value="<?php echo $dep->Deportes_idDeportes; ?>"><?php echo $dep->Nombre_Deportes; ?></option>      
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Torneo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
