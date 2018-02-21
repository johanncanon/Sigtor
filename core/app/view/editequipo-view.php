<?php 
$user = EquipoData::getById($_GET["id"]);
$categories = EntidadData::getAlledit();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Editar Medico</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatequipo" role="form">



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del equipo*</label>
    <div class="col-md-6">
      <input type="text" name="NombreEquipo" value="<?php echo $user->NombreEquipo;?>" class="form-control" id="name" placeholder="Nombre Equipo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de equipo*</label>
    <div class="col-md-6">
      <input type="text" name="TipoEquipo" value="<?php echo $user->TipoEquipo;?>" required class="form-control" id="lastname" placeholder="Tipo de equipo">
    </div>
  </div>
                      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Entidad*</label>
    <div class="col-md-6">
    <select name="IdEntidad" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($categories as $cat):?>
    <option value="<?php echo $cat->IdEntidad; ?>" <?php if($user->IdEntidad==$cat->IdEntidad){ echo "selected"; }?>><?php echo $cat->NombreEntidad; ?></option>      
    <?php endforeach;?>
    </select>
    </div>
  </div>
   <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
    </div>
  </div>
</form>
</div>
</div>
	</div>
</div>
