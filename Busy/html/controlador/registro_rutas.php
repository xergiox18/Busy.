<?php

if (!empty($_POST["btnruta"])){
    
    if (!empty($_POST["origen"]) or !empty($_POST["destino"])
    or !empty($_POST["horario"])or !empty($_POST["intervalos"])
    or !empty($_POST["precio"]) or !empty($_FILES["imagen"]) ){
        $origen=$_POST["origen"];
        $destino=$_POST["destino"];
        $horario=$_POST["horario"];
        $intervalos=$_POST["intervalos"];
        $precio=$_POST["precio"];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        
        $sql=$conexion->query(" insert into ruta(origen_ruta	,destino_ruta,	horarios_ruta,	intervalo_ruta,	precio_ruta, img	
        )values ('$origen','$destino','$horario','$intervalos','$precio','$imagen')");
       if($sql==1)  {
        echo '<div class="alert alert-success">Ruta registrada correctamente</div>';
        
    } else {
        echo '<div class="alert alert-danger">Error al  registrar ruta</div>';
       }
       

   
   
    } else {
        echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
     }
}


?>