<?php
if(count($_POST)>0){
	$user = new LugarData();
	$user->NombreUbicacion = $_POST["NombreUbicacion"];
	$user->Direccion = $_POST["Direccion"];
	$user->Telefono = $_POST["Telefono"];
	$user->add();

print "<script>window.location='index.php?view=lugar';</script>";


}


?>