<?php

if (count($_POST) > 0) {
    $entidad = new EntidadData();
    
    $entidad->NombreEntidad = $_POST["NombreEntidad"];
    if (isset($_FILES["Foto"])) {
        $image = new Upload($_FILES["Foto"]);
        if ($image->uploaded) {
            $image->Process("storage/products/");
            if ($image->processed) {
                $entidad->Foto = $image->file_dst_name;
                $prod = $entidad->add_with_image();
            }
        } else {

            $prod = $entidad->add();
        }
    } else {
        $prod = $entidad->add();
    }

    //print "<script>window.location='index.php?view=pacients';</script>";
}
?>