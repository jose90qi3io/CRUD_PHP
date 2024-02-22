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
<h1 id="encabezado">  Personal </h1> 

<style>
table{
  width: 70% !important;
}
</style>
<?php
 include "./modelo/conexion.php";
  include "./controlador/eliminar_persona.php";
?>
    <!-- Tabla -->
    <div class="cont">
        <table class="table">
      <thead class="bg-info">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">APELLIDO</th>
          <th scope="col">DIN</th>
          <th scope="col">FECHA DE N.</th>
          <th scope="col">CORREO</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php 
        /* llamando a la conexion Base de datos */
        /*   include "./modelo/conexion.php"; */
          $sql = $conexion->query("Select * from persona");
          while($datos=$sql->fetch_object()) {?>

        <tr>
          <th><?=$datos -> id_persona ?></th>
          <td><?=$datos -> nombre?></td>
          <td><?=$datos -> apellido?></td>
          <td><?=$datos -> dni?></td>
          <td><?=$datos -> fecha_n?></td>
          <td><?=$datos -> correo?></td>
          <td>
            <a href="./modificar.php?id=<?=$datos -> id_persona?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="./index.php?id=<?=$datos -> id_persona?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>

          <?php }
        ?>

      </tbody>
    </table>
    </div>
   </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>