<?php
$categories = EquipoData::getAll();
?>
<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Torneo Deportivo</h4>
  </div>
  <div class="card-content table-responsive">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addtorneo" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del torneo*</label>
    <div class="col-md-6">
      <input type="text" name="NombreTorneo" class="form-control" id="name" placeholder="Nombre del Torneo">
    </div>
  </div>
      <div class="form-group">
                        <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Equipo*</label>
                        <div class="col-md-6">
                            <select name="TipoTorneo" class="form-control">
                                <option value="">-- SELECCIONE --</option>      
                                <option value="Futboal 8">Futboal 8</option>
                                <option value="Futboal 5">Futboal 5</option>
                                <option value="Voleibol">Voleibol</option>
                                <option value="Baloncesto">Baloncesto</option>
                            </select>
                        </div>
                    </div>
  
                 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de inicio del torneo</label>
    <div class="col-md-6">
      <input type="date" name="FechaInicio" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
    </div>
  </div>
                                     <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha finalizacion torneo</label>
    <div class="col-md-6">
      <input type="date" name="FechaFin" class="form-control"  id="address1" placeholder="Fecha de Nacimiento">
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