<div class="row">
	<div class="col-md-12">

<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Jugadores</h4>
  </div>
  <div class="card-content table-responsive">

<div class="btn-group">
	<a href="index.php?view=newjugador" class="btn btn-default"><i class='fa fa-support'></i> Agregar Jugador</a>
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

		$users = JugadorData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Edad</th>
			<th>Cedula</th>
			<th>Telefono</th>
			<th>Celular</th>
                        <th>Entidad</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->Nombres." ".$user->Apellidos; ?></td>
				<td><?php echo $user->Edad; ?></td>
				<td><?php echo $user->Cedula; ?></td>
				<td><?php echo $user->Telefono; ?></td>
                                <td><?php echo $user->Celular; ?></td>
				<td><?php if($user->Equipo_idEquipo!=null){ echo $user->getEquipo()->Nombre_Equipo; } ?></td>
				<td style="width:280px;">
				<a href="index.php?view=medichistory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs">Historial</a>
				<a href="index.php?view=editmedic&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delmedic&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>

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