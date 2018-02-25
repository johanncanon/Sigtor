<?php

if (count($_POST) > 0) {
    $entidad = new DeportesData();
    $entidad->Nombre_Deportes = $_POST["Nombre_Deportes"];
    $entidad->descripcion = $_POST["descripcion"];
    $entidad->add();
    print "<script>window.location='index.php?view=deportes';</script>";
}
?>