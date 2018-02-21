<?php

if(count($_POST)>0){
        $entidad = EntidadData::getById($_POST["user_id"]);
	//$user = PacientData::getById($_POST["user_id"]);
	$entidad->NombreEntidad = $_POST["NombreEntidad"];
	
	$entidad->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>