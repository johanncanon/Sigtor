<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<div class="card">
  <div class="card-header" data-background-color="blue">
      <h4 class="title">Entidades</h4>
  </div>
  <div class="card-content table-responsive">
	<a href="index.php?view=newentidad" class="btn btn-default"><i class='fa fa-male'></i> Nueva entidad</a>
		<?php

		$users = EntidadData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre de la entidad</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->Nombre_Entidad; ?></td>
                                <td><?php echo $user->Telefono; ?></td>
                                <td><?php echo $user->Direccion; ?></td>
				<td style="width:280px;">
				<a href="index.php?view=editentidad&id=<?php echo $user->IdEntidad;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delpacient&id=<?php echo $user->IdEntidad;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}
			?>
			</table>
			</div>
			</div>
			<?php



		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>


	</div>
</div>