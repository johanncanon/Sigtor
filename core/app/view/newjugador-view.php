<?php
$categories = EquipoData::getAll();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Jugador</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addjugador" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="Nombre" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="Apellido" required class="form-control" id="lastname" placeholder="Apellidos">
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
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Documento*</label>
    <div class="col-md-6">
    <select name="TipoDocumento" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
    <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>
    </select>
    </div>
  </div>  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de Documento*</label>
    <div class="col-md-6">
      <input type="text" name="NumeroDocumento" class="form-control" id="phone" placeholder="Numero de Documento">
    </div>
  </div>
                      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-md-6">
      <input type="date" name="FechaNacimiento" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
    </div>
  </div>
                      <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Equipo en el que jugara*</label>
    <div class="col-md-6">
    <select name="IdEquipo" class="form-control">
    <option value="">-- SELECCIONE --</option>      
    <?php foreach($categories as $cat):?>
    <option value="<?php echo $cat->IdEquipo; ?>"><?php echo $cat->NombreEquipo; ?></option>      
    <?php endforeach;?>
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