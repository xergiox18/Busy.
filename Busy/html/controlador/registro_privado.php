<?php

if (!empty($_POST["btnprivado"])){
    
    if (!empty($_POST["origen"]) or !empty($_POST["destino"])
    or !empty($_POST["horario"])or !empty($_POST["capacidad"])
    or !empty($_POST["precio"]) or !empty($_POST["tel"]) or !empty($_FILES["imagen"]) ){
        $origens=$_POST["origen"];
        $destinos=$_POST["destino"];
        $horarios=$_POST["horario"];
        $capacidad=$_POST["capacidad"];
        $precios=$_POST["precio"];
        $tel=$_POST["tel"];
        $imagens = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    
        
        $sql=$conexion->query(" insert into privado (origen_ruta	,destino_ruta,	horarios_ruta,	intervalo_ruta,	precio_ruta, tel, img	
        )values ('$origens','$destinos','$horarios','$capacidad','$precios','$tel','$imagens')");
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