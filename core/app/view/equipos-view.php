<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Agregar Equipos</h4>
            </div>
            <div class="card-content table-responsive">

                <div class="btn-group">
                    <a href="index.php?view=newequipo" class="btn btn-default"><i class='fa fa-support'></i> Nuevo Equipo</a>
                </div>
                <?php               
                $users = EquipoData::getAll();
                if (count($users) > 0) {
                    // si hay usuarios
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Nombre Equipo</th>
                        <th># de Jugadores</th>
                        <th>Entrenador</th>
                        <th>Representante</th>
                        <th>Tel Representante</th>
                        <th>Correo del Representante</th>
                        <th>Entidad</th>
                        <th></th>
                        </thead>
                        <?php
                        foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?php echo $user->Nombre_Equipo; ?></td>
                                <td><?php echo $user->Num_Jugadores; ?></td>
                                <td><?php echo $user->EntrenadorNombre; ?></td>
                                <td><?php echo $user->RepresentanteNombre; ?></td>
                                <td><?php echo $user->Tel_Representante; ?></td>
                                <td><?php echo $user->Correo_Representante; ?></td>
                                <td><?php
                                    if ($user->Entidad_idEntidad != null) {
                                        echo $user->getEntidad()->NombreEntidad;
                                    }
                                    ?>
                                </td>
                                <td style="width:280px;">
                                    <a href="index.php?view=editequipo&id=<?php echo $user->idEquipo; ?>" 
                                       class="btn btn-warning btn-xs">
                                        Editar
                                    </a>
                                    <a href="index.php?view=delmedic&id=
                                        <?php echo $user->idEquipo; ?>" class="btn btn-danger btn-xs">
                                        Eliminar
                                    </a>

                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                } else {
                    echo "<p class='alert alert-danger'>No hay medicos</p>";
                }
                ?>

            </div>
        </div>
    </div>
</div>