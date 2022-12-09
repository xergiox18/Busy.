<?php

if (!empty($_POST["btnprivado"])) {

    if (
        !empty($_POST["origen"]) or !empty($_POST["destino"])
        or !empty($_POST["horario"])or !empty($_POST["capa"])
        or !empty($_POST["precio"]) or !empty($_POST["tel"])
    ) {
        $id = $_POST["id"];
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $horario = $_POST["horario"];
        $capacidad = $_POST["capa"];
        $precio = $_POST["precio"];
        $tel = $_POST["tel"];
        $sql = $conexion->query(" update privado set origen_ruta='$origen', destino_ruta='$destino',horarios_ruta='$horario',intervalo_ruta='$capacidad',precio_ruta='$precio',tel='$tel' where id_ruta='$id' ");

        if ($sql == 1) {

            header("location:tabla-privados.php");

        } else {
            echo '<div class="alert alert-danger">Error al modificar registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }

}
?>