<?php
$pacients = PacientData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$payments = PaymentData::getAll();
$equipo = EquipoData::getAll();
$lugar = LugarData::getAll();
$torneo = TorneoData::getAll();
?>

<div class="row">
    <div class="col-md-10">
        <h1>Nuevo partido</h1>
        <form class="form-horizontal" role="form" method="post" action="./?action=addreservation">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Asunto</label>
                <div class="col-lg-10">
                    <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="Asunto">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Equipo Uno</label>
                <div class="col-lg-10">
                    <select name="IdEquipo" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                        <?php foreach ($equipo as $p): ?>
                            <option value="<?php echo $p->IdEquipo; ?>"><?php echo $p->IdEquipo . " - " . $p->NombreEquipo. " - " . $p->TipoEquipo; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Equipo Dos</label>
                <div class="col-lg-10">
                    <select name="IdEquipo" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                        <?php foreach ($equipo as $p): ?>
                            <option value="<?php echo $p->IdEquipo; ?>"><?php echo $p->IdEquipo . " - " . $p->NombreEquipo. " - " . $p->TipoEquipo; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
<!--            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Medico</label>
                <div class="col-lg-10">
                    <select name="medic_id" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                        <?php foreach ($medics as $p): ?>
                            <option value="<?php echo $p->id; ?>"><?php echo $p->id . " - " . $p->name . " " . $p->lastname; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>-->
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Fecha y Hora del partido</label>
                <div class="col-lg-5">
                    <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha">
                </div>
                <div class="col-lg-5">
                    <input type="time" name="time_at" required class="form-control" id="inputEmail1" placeholder="Hora">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Lugar de Partido</label>
                <div class="col-lg-10">
                    <select name="IdEquipo" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                        <?php foreach ($lugar as $p): ?>
                            <option value="<?php echo $p->IdUbicacion; ?>"><?php echo $p->NombreUbicacion; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
<div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Torneo</label>
                <div class="col-lg-10">
                    <select name="IdEquipo" class="form-control" required>
                        <option value="">-- SELECCIONE --</option>
                        <?php foreach ($torneo as $p): ?>
                            <option value="<?php echo $p->IdTorneo; ?>"><?php echo $p->NombreTorneo; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
<!--            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="note" placeholder="Nota"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="sick" placeholder="Enfermedad"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Sintomas</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="symtoms" placeholder="Sintomas"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="medicaments" placeholder="Medicamentos"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Estado de la cita</label>
                <div class="col-lg-10">
                    <select name="status_id" class="form-control" required>
                        <?php foreach ($statuses as $p): ?>
                            <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Estado del pago</label>
                <div class="col-lg-10">
                    <select name="payment_id" class="form-control" required>
                        <?php foreach ($payments as $p): ?>
                            <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Costo</label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                        <input type="text" class="form-control" name="price" placeholder="Costo">
                    </div>
                </div>
            </div>-->
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Agregar</button>
                </div>
            </div>
        </form>

    </div>
</div>