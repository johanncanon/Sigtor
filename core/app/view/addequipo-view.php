<?php

if (count($_POST) > 0) {
    $user = new EquipoData();
    $user->Nombre_Equipo = $_POST["Nombre_Equipo"];
//	$user->TipoEquipo = $_POST["TipoEquipo"];      
    $user->Num_Jugadores = $_POST["Num_Jugadores"];
    $user->RepresentanteNombre = $_POST["RepresentanteNombre"];
    $user->EntrenadorNombre = $_POST["EntrenadorNombre"];
    $user->Tel_Representante = $_POST["Tel_Representante"];
    $user->Correo_Representante = $_POST["Correo_Representante"];
    $category_id = "NULL";
    $puntos_id = "NULL";
    if ($_POST["Entidad_idEntidad"] != "") {
        $category_id = $_POST["Entidad_idEntidad"];
    }
    if ($_POST["PuntosEquipo_idPuntosEquipo"] != "") {
        $puntos_id = $_POST["PuntosEquipo_idPuntosEquipo"];
    }
    $user->Entidad_idEntidad = $category_id;
    $user->PuntosEquipo_idPuntosEquipo = $puntos_id;
    $user->add();

    print "<script>window.location='index.php?view=equipos';</script>";
}
?>