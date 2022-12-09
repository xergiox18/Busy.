<?php

if (!empty($_POST["btncliente"])) {
    if (
        !empty($_POST["nombres"]) or !empty($_POST["apellidos"])
        or !empty($_POST["correo"]) or !empty($_POST["telefono"])
        or !empty($_POST["direccion"]) or !empty($_POST["ciudad"])
    ) {
        $nombresc = $_POST["nombres"];
        $apellidosc = $_POST["apellidos"];
        $correoc = $_POST["correo"];
        $telefonoc = $_POST["telefono"];
        $direccionc = $_POST["direccion"];      
        $ciudadc = $_POST["ciudad"];
        $sql = $conexion->query(" insert into datos_cliente  (nombres, apellidos, correo, telefono_celular, direccion, ciudad)values 
        ('$nombresc','$apellidosc','$correoc','$telefonoc','$direccionc','$ciudadc')");
        if($sql==1)  {
            echo '<div class="alert alert-success">cliente registrado correctamente</div>';
           
        } else {
            echo '<div class="alert alert-danger">Error al  registrar cliente</div>';
           }
           
    
       
       
        } else {
            echo '<div class="alert alert-warning">Algunos de los campos esta vacio</div>';
         }
         
         
       
        }
    
    
    ?>
