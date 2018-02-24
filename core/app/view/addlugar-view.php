<?php
if(count($_POST)>0){
    
	$user = new LugarData();
	$user->Nombre_Lugar = $_POST["Nombre_Lugar"];
	$user->Direccion = $_POST["Direccion"];
	$user->Telefono = $_POST["Telefono"];
        $user->Barrio = $_POST["Barrio"];
        $user->Localidad = $_POST["Localidad"];
	$user->add();

print "<script>window.location='index.php?view=lugar';</script>";


}


?>