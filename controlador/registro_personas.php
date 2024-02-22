<?php 
/* Validacion de registros */
if(!empty($_POST["btnregistrar"])){
    if(
        !empty($_POST["nombre"]) and 
        !empty($_POST["apellido"]) and 
        !empty($_POST["dni"]) and 
        !empty($_POST["fecha_n"]) and 
        !empty($_POST["correo"])){
        /* ASIGNACION DE VARIABLE A LOS 'names' de cada input */
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $dni= $_POST["dni"];
            $fecha_n = $_POST["fecha_n"];
            $correo = $_POST["correo"];
        /* Sentencia SQL para agregar nuevos datos a la BD */
        /* para la sentencia de pone el nombre de la Base de datos "." seguido del nombre de la tabla */
            $sql = $conexion -> query("INSERT INTO crud_php.persona(nombre, apellido, dni, fecha_n, correo) VALUES('$nombre','$apellido','$dni','$fecha_n','$correo')");
            
            if($sql==1){
                echo'<div class="alert alert-success" role="alert">Persona registrada correctamente </div>';
            }else{
                echo'<div class="alert alert-danger" role="alert"> Error en el registro </div>';
            }
    }else{
        echo '<div class="alert alert-warning" role="alert"> Alguno de los campos esta vacio! </div>';
    }
}

?>