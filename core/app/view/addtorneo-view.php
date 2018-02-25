<?php
if(count($_POST)>0){
	$user = new TorneoData();
	$user->NombreTorneo = $_POST["NombreTorneo"];
	$user->TipoTorneo = $_POST["TipoTorneo"];
	$user->FechaInicio = $_POST["FechaInicio"];
        $user->FechaFin = $_POST["FechaFin"];
        $deporte_id = "NULL";
        if ($_POST["Deportes_idDeportes"] !="") {
            $deporte_id = $_POST["Deportes_idDeportes"];
        }
        $users->Deportes_idDeportes = $deporte_id;
	$user->add();

print "<script>window.location='index.php?view=torneo';</script>";


}


?>