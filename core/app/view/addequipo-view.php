<?php

if (count($_POST) > 0) {
    $user = new EquipoData();
    $user->Nombre_Equipo = $_POST["Nombre_Equipo"];   
    $user->Num_Jugadores = $_POST["Num_Jugadores"];
    $user->RepresentanteNombre = $_POST["RepresentanteNombre"];
    $user->EntrenadorNombre = $_POST["EntrenadorNombre"];
    $user->Tel_Representante = $_POST["Tel_Representante"];
    $user->Correo_Representante = $_POST["Correo_Representante"];
    $category_id = "NULL";
    if ($_POST["Entidad_idEntidad"] != "") {
        $category_id = $_POST["Entidad_idEntidad"];
    }
    $user->Entidad_idEntidad = $category_id;
   $torneo_id = "NULL";
    if ($_POST["IdTorneo"] != "") {
        $torneo_id = $_POST["IdTorneo"];
    }
    $user->IdTorneo = $torneo_id;
    $user->add();

    print "<script>window.location='index.php?view=equipos';</script>";
}
?>