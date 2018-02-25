<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Nuevo Torneo</h4>
            </div>
            <div class="card-content table-responsive">

                <div class="btn-group">
                    <a href="index.php?view=newtorneo" class="btn btn-default"><i class='fa fa-trophy'></i> Agregar</a>

                </div>
                <?php
                $users = TorneoData::getAll();
                if (count($users) > 0) {
                    // si hay usuarios
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Nombre Torneo</th>
                        <th>Fecha Inicial</th>
                        <th>Fecha Final</th>
                        <th></th>
                        </thead>
                        <?php
                        foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?php echo $user->NombreTorneo; ?></td>
                                <td><?php echo $user->FechaInicio; ?></td>
                                <td><?php echo $user->FechaFin; ?></td>

                                <td style="width:280px;">
                                    <a href="index.php?view=medichistory&id=<?php echo $user->id; ?>" class="btn btn-default btn-xs">Historial</a>
                                    <a href="index.php?view=editmedic&id=<?php echo $user->id; ?>" class="btn btn-warning btn-xs">Editar</a>
                                    <a href="index.php?view=delmedic&id=<?php echo $user->id; ?>" class="btn btn-danger btn-xs">Eliminar</a>

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
