<?php

if (!empty($_POST["btnwilli"])) {

    if (
        !empty($_POST["origen"]) or !empty($_POST["destino"])
        or !empty($_POST["horario"])or !empty($_POST["intervalos"])
        or !empty($_POST["precio"])
    ) {
        $id = $_POST["id"];
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $horario = $_POST["horario"];
        $intervalos = $_POST["intervalos"];
        $precio = $_POST["precio"];
        $sql = $conexion->query(" update willis set origen_ruta='$origen', destino_ruta='$destino',horarios_ruta='$horario',intervalo_ruta='$intervalos',precio_ruta='$precio' where id_ruta='$id' ");

        if ($sql == 1) {

            header("location:tabla-willis.php");

        } else {
            echo '<div class="alert alert-danger">Error al modificar registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }

}
?>