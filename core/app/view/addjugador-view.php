<?php
if(count($_POST)>0){
	$user = new JugadorData();
	$user->Nombre = $_POST["Nombre"];
	$user->Apellido = $_POST["Apellido"];
	$user->Sexo = $_POST["Sexo"];
	$user->TipoDocumento = $_POST["TipoDocumento"];
	$user->NumeroDocumento = $_POST["NumeroDocumento"];
        $user->FechaNacimiento = $_POST["FechaNacimiento"];
        $category_id = "NULL";
	if($_POST["IdEquipo"]!=""){ $category_id = $_POST["IdEquipo"]; }
        $user->IdEquipo = $category_id;
	$user->add();

print "<script>window.location='index.php?view=jugador';</script>";


}


?>