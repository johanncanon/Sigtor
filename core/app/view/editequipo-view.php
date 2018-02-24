<?php
$user = EquipoData::getById($_GET["id"]);
$categories = EntidadData::getAlledit();
?>
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Editar Equipo</h4>
            </div>
            <div class="card-content table-responsive">
                <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatequipo" role="form">



                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre del equipo*</label>
                        <div class="col-md-6">
                            <input type="text" name="Nombre_Equipo" value="<?php echo $user->Nombre_Equipo; ?>" class="form-control" id="name" placeholder="Nombre Equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Numero de Jugadores*</label>
                        <div class="col-md-6">
                            <input type="text" name="Num_Jugadores" value="<?php echo $user->Num_Jugadores; ?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre de Representante*</label>
                        <div class="col-md-6">
                            <input type="text" name="RepresentanteNombre" value="<?php echo $user->RepresentanteNombre; ?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Nombre del entrenador*</label>
                        <div class="col-md-6">
                            <input type="text" name="EntrenadorNombre" value="<?php echo $user->EntrenadorNombre; ?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Teléfono de Representante*</label>
                        <div class="col-md-6">
                            <input type="text" name="Tel_Representante" value="<?php echo $user->Tel_Representante; ?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Correo de Representante*</label>
                        <div class="col-md-6">
                            <input type="text" name="Correo_Representante" value="<?php echo $user->Correo_Representante; ?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Entidad*</label>
                        <div class="col-md-6">
                            <select name="IdEntidad" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?php echo $cat->idEntidad; ?>" <?php if ($user->Entidad_idEntidad == $cat->idEntidad) {
                                    echo "selected";
                                } ?>><?php echo $cat->NombreEntidad; ?></option>      
                                        <?php endforeach; ?>    
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                            <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
