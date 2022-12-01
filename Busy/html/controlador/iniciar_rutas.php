<?php


if (!empty($_POST["btnrutas"])){
    if (!empty($_POST["origenf"]) and !empty($_POST["destinof"])and !empty($_POST["placaf"])){ // si se ingreso por lo menos un campo
        $origen=$_POST["origenf"];
        $destino=$_POST["destinof"];
        $placa=$_POST["placaf"];
        $sql=$conexion->query(" select * from buses where placa='$placa'");
        $sql=$conexion->query(" select * from ruta where origen_ruta='$origen' and destino_ruta='$destino'");
        if ($datos=$sql->fetch_object()) {
             header("location:perfil_conductores2.php");

        } else {
            
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';       
  
        }
        
    } else {
                
        echo '<div class="alert alert-warning" >Los campos de seleccion estan vacios</div>';        
        
    }

}

?>