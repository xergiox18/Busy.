<?php

if (!empty($_POST["btnwillis"])){
    
    if (!empty($_POST["origen"]) or !empty($_POST["destino"])
    or !empty($_POST["horario"])or !empty($_POST["intervalos"])
    or !empty($_POST["precio"]) or !empty($_FILES["imagen"]) ){
        $origenw=$_POST["origen"];
        $destinow=$_POST["destino"];
        $horariow=$_POST["horario"];
        $intervalosw=$_POST["intervalos"];
        $preciow=$_POST["precio"];
        $imagenw = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        
        $sql=$conexion->query(" insert into willis(origen_ruta	,destino_ruta,	horarios_ruta,	intervalo_ruta,	precio_ruta, img	
        )values ('$origenw','$destinow','$horariow','$intervalosw','$preciow','$imagenw')");
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