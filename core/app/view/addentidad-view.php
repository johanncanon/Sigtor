<?php

if (count($_POST) > 0) {
    $entidad = new EntidadData();
    $entidad->Nombre_Entidad = $_POST["Nombre_Entidad"];
    $entidad->Telefono = $_POST["Telefono"];
    $entidad->Direccion = $_POST["Direccion"];
    $entidad->add();
    print "<script>window.location='index.php?view=entidad';</script>";
}
?>