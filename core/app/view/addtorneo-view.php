<?php

if (count($_POST) > 0) {
    $user = new TorneoData();
    $user->NombreTorneo = $_POST["NombreTorneo"];
    $user->FechaInicio = $_POST["FechaInicio"];
    $user->FechaFin = $_POST["FechaFin"];
    $category_id = "NULL";
    if ($_POST["Deportes_idDeportes"] != "") {
        $category_id = $_POST["Deportes_idDeportes"];
    }
    $user->Deportes_idDeportes = $category_id;
    $user->add();

print "<script>window.location='index.php?view=torneo';</script>";
}
