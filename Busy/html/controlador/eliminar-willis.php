<?php

if (!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from willis where id_ruta=$id");
    if ($sql==1) {
        echo '<div class="text-center   alert alert-success">El registro fue eliminado correctamente </div>';
    } else {
        echo '<div class="text-center alert alert-danger">Error al eliminar </div>';
    }
    
}


?>