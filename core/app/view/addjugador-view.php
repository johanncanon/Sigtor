<?php
if(count($_POST)>0){
	$user = new JugadorData();
        
	$user->Nombres = $_POST["Nombres"];
	$user->Apellidos = $_POST["Apellidos"];
	$user->Edad = $_POST["Edad"];
	$user->Cedula = $_POST["Cedula"];
	$user->Telefono = $_POST["Telefono"];
        $user->Celular = $_POST["Celular"];
        $user->Tiene_ARL = $_POST["Tiene_ARL"];
        $user->Sexo = $_POST["Sexo"];
       $category_id = "NULL";
    if ($_POST["Equipo_idEquipo"] != "") {
        $category_id = $_POST["Equipo_idEquipo"];
    }
    $user->Equipo_idEquipo = $category_id;
	$user->add();

print "<script>window.location='index.php?view=jugador';</script>";


}


?>