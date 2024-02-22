<?php
    include'./modelo/conexion.php';
    $id=$_GET["id"];
    $sql = $conexion -> query("SELECT * FROM persona WHERE id_persona=$id");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="http://localhost:8080/proyectoNotas/css/styles.css">
    <!-- fontawesome - icons -->
    <script src="https://kit.fontawesome.com/f9c567468a.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
  <a class="navbar-brand" href="./index.php">
    <i class="fa-solid fa-house"></i> INICIO
    </a>
    <a class="navbar-brand" href="./registro.php">
    <i class="fa-regular fa-newspaper"></i> REGISTRO
    </a>
  </div>
</nav>
<style>
table{
  width: 70% !important;
}
</style>

   <div class="conteiner">
    <!-- Formulario -->
      <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Modificar personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "./controlador/modificar_personas.php";
        while($datos = $sql -> fetch_object()) { ?>
        
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="<?= $datos-> nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellido" value="<?= $datos-> apellido?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dni" value="<?= $datos-> dni?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fecha_n" value="<?= $datos-> fecha_n?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" value="<?= $datos-> correo?>">
            </div>
        <?php }
        ?>
      
      <button type="submit" class="btn btn-success" name="btnmodificar" value="ok">Modificar</button>
      <a href="./index.php" class="btn btn-danger" value="ok">Cancelar</a>
  
      
    </form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>