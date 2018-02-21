<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Agregar Equipos</h4>
  </div>
  <div class="card-content table-responsive">

<div class="btn-group">
	<a href="index.php?view=newequipo" class="btn btn-default"><i class='fa fa-support'></i> Nuevo Equipo</a>
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/medicss-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div> -->
</div>
		<?php

		$users = EquipoData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Tipo de Equipo</th>
			<th>Entidad</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->NombreEquipo; ?></td>
				<td><?php echo $user->TipoEquipo; ?></td>
				<td><?php if($user->IdEntidad!=null){ echo $user->getEntidad()->NombreEntidad; } ?></td>
				<td style="width:280px;">
				<a href="index.php?view=editequipo&id=<?php echo $user->IdEquipo;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delmedic&id=<?php echo $user->IdEquipo;?>" class="btn btn-danger btn-xs">Eliminar</a>

				</td>
				</tr>
				<?php
?>
</table>
<?php
			}



		}else{
			echo "<p class='alert alert-danger'>No hay medicos</p>";
		}


		?>

</div>
</div>
	</div>
</div>