<?php

if(count($_POST)>0){
	$user = EquipoData::getById($_POST["user_id"]);

	$category_id = "NULL";
	if($_POST["IdEntidad"]!=""){ $category_id = $_POST["IdEntidad"]; }
	$user->NombreEquipo = $_POST["NombreEquipo"];
	$user->IdEntidad = $category_id;
	$user->TipoEquipo = $_POST["TipoEquipo"];
	
	$user->update();


print "<script>window.location='index.php?view=medics';</script>";


}


?>