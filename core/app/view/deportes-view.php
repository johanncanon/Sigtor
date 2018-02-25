<div class="row">
    <div class="col-md-12">
        <div class="btn-group pull-right">
          
        </div>
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Deportes</h4>
            </div>
            <div class="card-content table-responsive">
                <a href="index.php?view=newdeportes" class="btn btn-default"><i class='fa fa-male'></i> Nueva entidad</a>
                <?php
                $users = DeportesData::getAll();
                if (count($users) > 0) {
                    // si hay usuarios
                    ?>

                    <table class="table table-bordered table-hover">
                        <thead>
                        <th>Nombre del Deporte</th>
                        <th>Descripcion</th>
                        <th></th>
                        </thead>
                        <?php
                        foreach ($users as $user) {
                            ?>
                            <tr>
                                <td><?php echo $user->Nombre_Deportes ?></td>
                                <td><?php echo $user->descripcion; ?></td>
                                <td style="width:280px;">
                                    <a href="index.php?view=editentidad&id=<?php echo $user->IdEntidad; ?>" class="btn btn-warning btn-xs">Editar</a>
                                    <a href="index.php?view=delpacient&id=<?php echo $user->IdEntidad; ?>" class="btn btn-danger btn-xs">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
    <?php
} else {
    echo "<p class='alert alert-danger'>No hay pacientes</p>";
}
?>


    </div>
</div>