<?php

if(!empty($_POST["btnmodificar"])){
    if(
    !empty($_POST["nombre"]) and 
    !empty($_POST["apellido"]) and
    !empty($_POST["dni"]) and
    !empty($_POST["fecha_n"]) and
    !empty($_POST["correo"]) ){
    
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha_n = $_POST["fecha_n"];
        $correo = $_POST["correo"];

        $sql = $conexion -> query("UPDATE persona SET nombre='$nombre', apellido='$apellido', dni='$dni', fecha_n='$fecha_n', correo= '$correo' WHERE id_persona=$id");
        if($sql==1){
            header("location:index.php");
        }else{
            echo'<div class="alert alert-danger" role="alert"> Error al modificar </div>';
        }
    }else {
        echo '<div class="alert alert-warning" role="alert"> Alguno de los campos esta vacio! </div>';
    }
}


?>