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
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre del equipo*</label>
                        <div class="col-md-6">
                            <input type="text" name="NombreEquipo" class="form-control" id="name" placeholder="Nombre del equipo">
                        </div>
                    </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Entidad a la que pertenece*</label>
                        <div class="col-md-6">
                            <select name="IdEntidad" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat->IdEntidad; ?>"><?php echo $cat->NombreEntidad; ?></option>      
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-primary">Agregar Medico</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>