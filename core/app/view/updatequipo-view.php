<?php

if(count($_POST)>0){

        $user = new EquipoData();
        $user = EquipoData::getById($_POST["user_id"]);
        
//	$user->TipoEquipo = $_POST["TipoEquipo"];
	
	$user->Nombre_Equipo = $_POST["Nombre_Equipo"];
	$user->Num_Jugadores = $_POST["Num_Jugadores"];
	$user->RepresentanteNombre = $_POST["RepresentanteNombre"];
	$user->EntrenadorNombre = $_POST["EntrenadorNombre"];
	$user->Tel_Representante = $_POST["Tel_Representante"];
	$user->Correo_Representante = $_POST["Correo_Representante"];
	
        $category_id = "NULL";
	if($_POST["IdEntidad"]!=""){ $category_id = $_POST["IdEntidad"]; }
        $user->IdEntidad = $category_id;
        
	$user->update();


print "<script>window.location='index.php?view=medics';</script>";


}


?>