<?php

if(count($_POST)>0){
	$user = new EquipoData();
	$user->NombreEquipo = $_POST["NombreEquipo"];
	$user->TipoEquipo = $_POST["TipoEquipo"];
        $category_id = "NULL";
	if($_POST["IdEntidad"]!=""){ $category_id = $_POST["IdEntidad"]; }
        $user->IdEntidad = $category_id;
	$user->add();

print "<script>window.location='index.php?view=equipos';</script>";


}


?>